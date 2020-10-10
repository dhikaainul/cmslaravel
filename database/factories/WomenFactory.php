<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Women;
use Faker\Generator as Faker;

$factory->define(Women::class, function (Faker $faker) {
    return [
        'nama' =>$faker->sentence(),
        'jenis_pakaian' =>$faker->sentence(),
        'komentar'=>$faker->sentence()
    ];
});
