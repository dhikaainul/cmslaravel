<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Laki;
use Faker\Generator as Faker;

$factory->define(Laki::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->sentence(),
        'image' => $faker-> image('public/image',300,800,null,false),
        'size'=>$faker->sentence(),
        'price'=>$faker->sentence()
    ];
});
