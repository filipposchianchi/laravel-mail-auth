<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'color' => $faker -> safeColorName,
        'engine' => $faker -> randomElement($array = array ('1500','2000','2500','1200','3000','1800')),
        'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 10000, $max = 50000),
    
    ];
});
