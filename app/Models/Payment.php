<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $fillable = [
        'name',
    ];

     protected $guarded = [
        'id'
    ];

    public function calocation(){
      return  $this->belongsTo(Calocation::class);
    }

     public function user(){
      return  $this->belongsTo(User::class);
    }
}
