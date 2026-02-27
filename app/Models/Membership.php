<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    

protected $fillable = [
    'user_id',
    'calocation_id',
    'type',
    'status',
    'sold',
    'token',
    'left_at'
];

}