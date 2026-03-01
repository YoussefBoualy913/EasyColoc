<?php
namespace App\Services;

use App\Models\Calocation;
use App\Models\User;

class ColocationService
{
   public function updateSold( User $user,Calocation $calocation, float $amount): void
    {   
    
        $user->calocations()->updateExistingPivot($calocation->id, [
            'sold' => $amount,
        ]);
    }

}