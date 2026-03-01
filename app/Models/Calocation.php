<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calocation extends Model
{
    

     protected $fillable = [
        'name',
      
    ];

     protected $guarded = [
        'id'
    ];

 public function users(){
    return $this->belongsToMany(User::class,'memberships')->withPivot(['type', 'status', 'left_at','token','sold']);
 }

  public function categories(){
      return  $this->hasMany(category::class);
}

}
