<?php

use App\Models\City;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(City::class, function (Faker $faker) {
    return [
        'iso_3166_3' => null,
        'country_code' => null,
        'name' => null,
    ];
});
