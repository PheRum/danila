<?php

use App\Models\City;
use App\Models\User;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker $faker) {
    $dateTimeBetween = $faker->dateTimeBetween('-1 months', 'now');

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'city_id' => City::inRandomOrder()->first()->id,
        'gender' => $faker->randomElement([0, 1, 2]),
        'birthday' => $faker->date(),
        'register_date' => $dateTimeBetween,
        'remember_token' => str_random(10),
        'created_at' => $dateTimeBetween,
        'updated_at' => $dateTimeBetween,
    ];
});
