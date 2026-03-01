<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDepenesRequest;
use App\Models\Calocation;
use App\Models\Depense;
use App\Services\ColocationService;
use App\Services\DepenseService;
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
    public function store(storeDepenesRequest $request,Calocation $calocation ,DepenseService $depenseservise,ColocationService $colocationService)
    {
      $depenseservise->store($request,$calocation,$colocationService);
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
        $isNot_paid = $depense->payments()->where('payments.status','pending')->exists();
        if($isNot_paid)
            {
                return back()->with('message','le depense doit etre payer');
            }
        
        if(!$isNot_paid)
            {  
                 $depense->delete();
                return back()->with('message','le depense doit a etait supprimer avec succer');
            }
        
       
      
    }
}
