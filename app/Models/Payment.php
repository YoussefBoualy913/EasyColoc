<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $fillable = [
        'amount',
        'from_user_id',
        'to_user_id',
        'depense_id',
        'status',
    ];

     protected $guarded = [
        'id'
    ];

    public function fromUser(){
     return  $this->belongsTo(User::class,'from_user_id');
   }
    public function toUser(){
     return  $this->belongsTo(User::class,'to_user_id');
   }


     public function depense(){
      return  $this->belongsTo(Depense::class);
    }
}
