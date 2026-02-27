<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDepenesRequest;
use App\Models\Calocation;
use App\Models\Depense;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return redirect()->route('colocations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeDepenesRequest $request,Calocation $calocation)
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
  
    Depense::create([
        'titre'       => $data['titre'],
        'montant'      => $data['montant'],
        'date'        => $data['date'],
        'user_id'    => $data['user_id'],
        'category_id' => $data['category_id'],
    ]);

    return back()->with('success', 'Dépense ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depense $depense)
    {
        $depense->delete();
       return redirect()->route('colocations.index');
    }
}
