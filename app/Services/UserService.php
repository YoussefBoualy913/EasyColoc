<?php
namespace App\Services;

use App\Models\Calocation;
use App\Models\User;

class UserService
{
   public function isOwner(User $user,Calocation $calocation): bool
{
    return $calocation->users
        ->where('id', $user->id)
        ->first()?->pivot->type === 'owner';
}

}