<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    // check out https://laravel.com/docs/7.x/eloquent#mass-assignment
    protected $fillable = ['rate', 'description'];
}
