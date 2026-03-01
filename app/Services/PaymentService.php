<?php
namespace App\Services;

use App\Models\Calocation;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PaymentService
{
   public function payer( User $touser ,User $fromuser,Payment $payment)
    {   
         DB::transaction(function () use($payment,$touser,$fromuser){
             
             
             $fromsold = $fromuser->pivot->sold;
             $tosold = $touser->pivot->sold;
             $calocation = $fromuser->calocations->where('status','active');
             
             $payment->update([
                 'status'=>'paid'
                 ]);

                 $fromsold +=$payment->amount;
                 $tosold -=$payment->amount;

                 $fromuser->calocations()->updateExistingPivot($calocation->id, [
                     'sold' => $fromsold,
                   ]);

            $touser->calocations()->updateExistingPivot($calocation->id, [
             'sold' => $tosold,
             ]);

             });
    }

}