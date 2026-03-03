<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{   
     protected $fillable = [
        'email',
        'token',
        'calocation_id',
        'expires_at',
        'accepted_at',
      
    ];

     protected $guarded = [
        'id'
    ];

    public function calocation()
    {
        return  $this->belongsTo(calocation::class);
    }
}
