<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Services\ColocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payer(Payment $payment,ColocationService $colocationService)
    {    
        DB::transaction(function() use($payment,$colocationService){
            
            $payment->update(
                [
                    'status'=>'paid'
                ]
            );
            $calocation = $payment->depense->category->calocation;

            $soldfromuser  =   $calocation->users()
            ->where('users.id', $payment->from_user_id)
            ->first()?->pivot->sold;
            
           
             $soldfromuser += $payment->amount;
                
            $colocationService->updateSold($payment->fromUser, $calocation,$soldfromuser);

              $soldtouser  =   $calocation->users()
            ->where('users.id', $payment->to_user_id)
            ->first()?->pivot->sold;

            $soldtouser -= $payment->amount;
            $colocationService->updateSold($payment->toUser, $calocation,$soldtouser);
        });

       return redirect()->back();
         
    }
}
