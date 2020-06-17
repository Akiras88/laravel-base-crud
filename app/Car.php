<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // fillable
    protected $fillable = [
        'car',
        'model',
        'fuel',
        'year'
    ];
}
