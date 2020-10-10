<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Men;
use Faker\Generator as Faker;

$factory->define(Men::class, function (Faker $faker) {
    return [
        'nama' =>$faker->sentence(),
        'jenis_pakaian' =>$faker->sentence(),
        'komentar'=>$faker->sentence()
    ];
});
