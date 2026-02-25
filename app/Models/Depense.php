<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
     protected $fillable = [
        'titre',
        'montant'
    ];

     protected $guarded = [
        'id'
    ];

    public function category(){
      return  $this->belongsTo(category::class);
    }

     public function User(){
      return  $this->belongsTo(User::class);
    }

     public function calocation(){
      return  $this->belongsTo(Calocation::class);
    }
}
