<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\Boolean;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'user_id'=>1,
        'category_id'=>rand(1,2),
        'date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'title'=>$faker->sentence(),
        'description'=>$faker->text(800),
        'state'=>$faker->boolean          
    ];
});
