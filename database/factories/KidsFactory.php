<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kids;
use Faker\Generator as Faker;

$factory->define(Kids::class, function (Faker $faker) {
    return [
        'nama' =>$faker->sentence(),
        'jenis_pakaian' =>$faker->sentence(),
        'komentar'=>$faker->sentence()
    ];
});
