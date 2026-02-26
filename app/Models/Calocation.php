<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calocation extends Model
{
    

 public function users(){
    return $this->belongsToMany(User::class,'memberships')->withPivot(['type', 'status', 'left_at','token','sold']);
 }

  public function category(){
      return  $this->hasMany(category::class);
}

 public function Payment(){
      return  $this->hasMany(Payment::class);
}
}
