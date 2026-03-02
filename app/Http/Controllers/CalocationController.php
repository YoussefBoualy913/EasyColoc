<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalocationRequeste;
use App\Models\Calocation;
use App\Models\category;
use App\Models\Membership;
use App\Models\User;
use App\Services\ColocationService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserService $userservice)
    {   
        $user = Auth::user();
        $is_exists =  $user->calocations()->with(['users','categories.depenses.user'])->exists();
        if($is_exists){
         $calocations = $user->calocations()->with(['users','categories.depenses.user'])->paginate(3);
        
        $data =[
            'calocations'=>$calocations,
            'userservice'=>$userservice,
        ];
        
        return view('calocations.index',$data);
        }
        if(!$is_exists){
        return view('calocations.nocalocation');
        }
        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {
            
            return view('calocations.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CalocationRequeste $request)
    {
         $user = Auth::user();
         $hasactivecoloc = $user->calocations()->where('calocations.status','active')->exists();
       
        if(!$hasactivecoloc ||   $user->role === "admin"){
        DB::transaction(function () use ($request,$user) {
   
            $calocation = Calocation::create($request->validated());
            if($request->has('categories')){
               
                foreach($request->categories as $category){
                   $data[] = [
                      'name' => $category,
                      'calocation_id' => $calocation->id,
                      'created_at' => now(),
                      'updated_at' => now(),
                     ];
                }
                Category::insert($data);
               
            }

           
            Membership::create([
                'calocation_id'=> $calocation->id,
                'user_id'=> $user->id,
                'type'=> 'owner',
                'status'=> 'active',

            ]);
    
        });
        return redirect()->route('colocations.index');
        }

        if($hasactivecoloc && $user->role === "member")
            {
                 return redirect()->route('colocations.index')->with('message','vous avez deja une colocation!'); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Calocation $calocation,UserService $userservice)
    {
        $user = Auth::user();
        $calocation =  $user->calocations()->where('calocations.status','active')->where('calocations.id',$calocation->id)
        ->with(['categories.depenses.user',
        'categories.depenses.payments' => function ($q) {
        $q->where('status', 'pending');
        },
        'categories.depenses.payments.fromUser',
        'categories.depenses.payments.toUser'])->first();
        
        $users = $calocation->users()->wherePivotNull('left_at')->get();

        $isOwner = $users->where('id',  $user->id)->first()?->pivot->type === 'owner';
        $data =[
            'calocation'=>$calocation,
            'users'=>$users,
            'isOwner'=>$isOwner,
            'userservice'=>$userservice,
        ];
        
        return view('calocations.show',$data);
        
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calocation $calocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calocation $calocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calocation $calocation)
    {
        $calocation->delete();
        return redirect()->route('colocations.show');
    }

      public function cancel(Calocation $calocation,ColocationService $colocationService)
    {
       $colocationService->annulerColoc($calocation);
       return redirect()->route('colocations.index');
    }
}
