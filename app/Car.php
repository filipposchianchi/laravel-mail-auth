<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [

        'name',
        'color',
        'engine',
        'price'

    ]; 
}
