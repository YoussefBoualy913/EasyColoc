<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calocation extends Model
{
    

     protected $fillable = [
        'name',
        'status',
      
    ];

     protected $guarded = [
        'id'
    ];

 public function users(){
    return $this->belongsToMany(User::class,'memberships')->withPivot(['type', 'status', 'left_at','joined_at','sold']);
 }

  public function categories(){
      return  $this->hasMany(category::class);
}

  public function invitations(){
      return  $this->hasMany(Invitation::class);
}

public function member(User $user)
{
    return $this->users()->where('users.id', $user->id)->first();
}

}
