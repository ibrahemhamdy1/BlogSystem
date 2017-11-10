<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => $faker->randomElement($array = array ('admin','author','subscriber')),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\post::class, function (Faker $faker) {

    return [
        'owner_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $faker->word,
        'body' => $faker->text($maxNbChars = 100),
    ];
});

$factory->define(App\comment::class, function (Faker $faker) {

    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'post_id' => $faker->numberBetween($min = 1, $max = 10),
        'body' => $faker->text($maxNbChars = 100),
    ];
});
