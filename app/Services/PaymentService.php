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
             
             
             $calocation = $fromuser->calocations->where('status','active')->first();
             $fromsold = $calocation->member($fromuser)->pivot->sold;
             $tosold = $calocation->member($touser)->pivot->sold;
             
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