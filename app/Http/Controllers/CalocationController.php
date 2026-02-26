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
        $calocation =  $user->calocation()->with('depenses')->where('status','active');
        // dd($calocation->toRawSql());
        return view('calocation.index',compact('calocation'));
        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {
            
            return view('calocation.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CalocationRequeste $request)
    {
        DB::transaction(function () use ($request) {
   
            $calocation = Calocation::create($request->validated());
           
            if($request->has('categories')){
                $data = [];
                foreach($request->categories as $category){
                  $data = ['name'=>$category,'Calocation_id'=>$calocation->id];
                }
            category::create($data);
            }
            $user = Auth::user();

            Membership::create([
                'Calocation_id'=> $calocation->id,
                'user_id'=> $user->id,
                'type'=> 'owner',
                'status'=> 'active',

            ]);
    
        });
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
        //
    }
}
