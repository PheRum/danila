<?php

use App\Models\Stat;
use App\Models\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Stat::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'visit_date' => $faker->dateTimeBetween('-1 months', 'now')->format('Y-m-d'),
    ];
});
