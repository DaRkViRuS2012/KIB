<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
       protected $fillable = [
        'ar_title', 'en_title', 'city_id'
    ];
}
