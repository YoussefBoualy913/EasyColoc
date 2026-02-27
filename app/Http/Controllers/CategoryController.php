<?php

namespace App\Http\Controllers;

use App\Models\Calocation;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $user = Auth::user();
        $calocation =  $user->calocations()->where('calocations.status','active')->with('categories')->first();
      
        $users = $calocation->users()->get();

        $isOwner = $users->where('id',  $user->id)->first()?->pivot->type === 'owner';
        $data =[
            'calocation'=>$calocation,
            'isOwner'=>$isOwner,
            'users'=>$users,
        ];
        
        return view('categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('categories.index') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Calocation $calocation)
    {
         $request->validate([
            'name'=>['required', 'string', 'max:255']
        ]);
       
        category::create([
           'name'=> $request->name,
           'calocation_id'=> $calocation->id,
        ]);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
