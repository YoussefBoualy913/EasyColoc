<?php
namespace App\Services;

use App\Models\Calocation;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class ColocationService
{
   public function updateSold( User $user,Calocation $calocation, float $amount): void
    {   
    
        $user->calocations()->updateExistingPivot($calocation->id, [
            'sold' => $amount,
        ]);
    }

     public function annulerColoc(Calocation $calocation)
 {
     DB::transaction(function() use($calocation){

       
        $users = $calocation->users()->wherePivotNull('left_at')->get();
        
         $calocation->update([
           'status'=>'annulee',
           'cancelled_at'=> now()
        ]);
        foreach($users as $user){
        $user->calocations()->updateExistingPivot($calocation->id, [
            'left_at' => now(),
        ]);
        }

       
     });
    
 }

}