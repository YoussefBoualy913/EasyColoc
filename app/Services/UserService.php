<?php
namespace App\Services;

use App\Models\Calocation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class UserService
{
   public function isOwner(User $user,Calocation $calocation): bool
{
    return $calocation->users
        ->where('id', $user->id)
        ->first()?->pivot->type === 'owner';
}

 public function retrait(User $user,PaymentService $paymentService)
 { 
    if($user->pivot->type != "owner")
        {
    $sold = $user->pivot->sold;
    $calocation = $user->calocations->where('status','active');
    if($sold >= 0)
        {
            DB::transaction(function () use($user,$paymentService,$calocation) {
                
              $frompayments = $user->fromPayments()->where('status', 'pending')->get();
            if($frompayments){
                foreach($frompayments as $payment){

                    $touser = $payment->toUser()->get();
                    $paymentService->payer($touser,$user,$payment);
                }
            }  
            
             $topayments = $user->toPayments()->where('status', 'pending')->get();
            if($topayments){
                foreach($topayments as $payment){

                    $fromuser = $payment->fromUser()->get();
                    $paymentService->payer($user,$fromuser,$payment);
                }
            }

           

            $user->calocations()->updateExistingPivot($calocation->id, [
             'left_at' => now()
            ]);
            $reputation = $user->reputation_score + 1;

             $payment->update([
                        'reputation_score'=>$reputation
                    ]);

         });

        }
     
    if($sold < 0)
        {
            DB::transaction(function () use($user,$paymentService,$calocation) {
                
           
            $frompayments = $user->fromPayments()->where('status', 'pending')->get();
            if($frompayments){
                foreach($frompayments as $payment){

                    $touser = $payment->toUser()->get();
                    $paymentService->payer($touser,$user,$payment);
                }
            }  
            
             $topayments = $user->toPayments()->where('status', 'pending')->get();
            if($topayments){
                foreach($topayments as $payment){

                    $fromuser = $payment->fromUser()->get();
                    $paymentService->payer($user,$fromuser,$payment);
                }
            }
            
             $user->calocations()->updateExistingPivot($calocation->id, [
             'left_at' => now()
            ]);

            if(auth()->id == $user->id)
            $reputation = $user->reputation_score - 1;

             $user->update([
                        'reputation_score'=>$reputation
            ]);

            if(auth()->id != $user->id)
            $reputation = auth()->reputation_score - 1;

            Auth::user()->update([
                        'reputation_score'=>$reputation
            ]);

            
        });
        }
        }
 }

}