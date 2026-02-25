<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $fillable = [
        'name',
    ];

     protected $guarded = [
        'id'
    ];

    public function depenses(){
      return  $this->hasMany(Depense::class);
    }
}
