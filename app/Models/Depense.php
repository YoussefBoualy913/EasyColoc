<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
     protected $fillable = [
        'titre',
        'montant',
        'date',
        'user_id',
        'category_id',
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

     public function payment(){
      return  $this->hasMany(Payment::class);
    }
}
