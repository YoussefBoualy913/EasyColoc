<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'name',
        'calocation_id',
    ];

     protected $guarded = [
        'id'
    ];

    public function depenses(){
      return  $this->hasMany(Depense::class);
    }

     public function calocation(){
      return  $this->belongsTo(Calocation::class);
    }
}
