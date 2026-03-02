<?php

namespace App\Http\Controllers;

use App\Models\Calocation;
use App\Models\User;
use App\Services\PaymentService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function retreit(User $user,UserService $userService ,PaymentService $PaymentService)
    {
        $userService->retrait($user,$PaymentService);
        if(Auth::user()->id != $user->id)
            {

                return back();
            }
        if(Auth::user()->id == $user->id){
            return redirect()->route('colocations.index');
        }
    }

  


}
