<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'instagram'=>$faker->userName,
        'facebook'=>$faker->userName,
        'github'=>$faker->userName,
        'twitter'=>$faker->userName,
    ];
});
