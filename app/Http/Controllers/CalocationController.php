<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalocationRequeste;
use App\Models\Calocation;
use App\Models\category;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = Auth::user();
        $calocation =  $user->calocations()->where('calocations.status','active')->with(['categories.depenses.user'])->first();
        if($calocation){
        $users = $calocation->users()->get();

        $isOwner = $users->where('id',  $user->id)->first()?->pivot->type === 'owner';
        $data =[
            'calocation'=>$calocation,
            'users'=>$users,
            'isOwner'=>$isOwner,
        ];
        
        return view('calocations.index',$data);
        }
        if(!$calocation){
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
        
        DB::transaction(function () use ($request) {
   
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

            $user = Auth::user();
            Membership::create([
                'calocation_id'=> $calocation->id,
                'user_id'=> $user->id,
                'type'=> 'owner',
                'status'=> 'active',

            ]);
    
        });
     return redirect()->route('colocations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Calocation $calocation)
    {
        //
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
        return redirect()->route('colocations.index');
    }
}
