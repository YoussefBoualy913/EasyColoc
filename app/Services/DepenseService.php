<?php
namespace App\Services;

use App\Http\Requests\storeDepenesRequest;
use App\Models\Calocation;
use App\Models\Depense;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DepenseService
{
   public function store(storeDepenesRequest $request,Calocation $calocation ,ColocationService $colocationService)
{
     $data = $request->validated(); 
        // dd($calocation->users()->where('users.id', $data['user_id'])->exists());
        abort_if(
        ! $calocation->users()->where('users.id', $data['user_id'])->exists(),
        403
       );

    abort_if(
        ! $calocation->categories()->where('categories.id', $data['category_id'])->exists(),
        403
    );

     $users = $calocation->users()->wherePivotNull('left_at')->get();

    $share = $data['montant'] / $users->count() ;

    DB::transaction(function () use ($users, $share,$data,$colocationService,$calocation) {

       $depense = Depense::create([
        'titre'       => $data['titre'],
        'montant'      => $data['montant'],
        'date'        => $data['date'],
        'user_id'    => $data['user_id'],
        'category_id' => $data['category_id'],
       ]);

        foreach ($users as $user) {
           
            if ($user->id === intval($data['user_id'])) {
                $sold = $user->pivot->sold;
              
                $sold += ($data['montant'] - $share);
                $colocationService->updateSold($user,$calocation,$sold);
                continue;
                }
                
              
            Payment::create([
                'depense_id'   => $depense->id,
                'from_user_id' => $user->id,
                'to_user_id'   => $data['user_id'],
                'amount'       => $share,
            ]);

             $sold = $user->pivot->sold;
             $sold -= ($share);
             $colocationService->updateSold($user,$calocation,$sold);
        }
    });
  
   


}

}