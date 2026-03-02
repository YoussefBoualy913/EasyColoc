<?php

namespace App\Http\Controllers;

use App\Models\Calocation;
use App\Models\Depense;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function userdashboad(){

    }

    public function adminDashboad(){
        $users = User::all()->sortByDesc(fn ($u) => $u->role === 'admin');
        $colocations = Calocation::with('users')->get();
        
        $depensesCount = Depense::sum('montant');
        $bannedCount = $users->where('status', 'banni')->count();
        $calocationsCount =  $colocations->count();

        $data = [
            'users' => $users,
            'colocations' => $colocations,
            'bannedCount' => $bannedCount,
            'calocationsCount' => $calocationsCount,
            'depensesCount' => $depensesCount
        ];
        return view('admin.dashboard',$data);
    }
}
