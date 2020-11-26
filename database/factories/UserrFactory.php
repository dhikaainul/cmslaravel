<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Userr;
use Faker\Generator as Faker;

$factory->define(Userr::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'image' => $faker-> image('public/image',300,800,null,false),
        'no_hp' => $faker->sentence(),
        'jenis_kelamin'=>$faker->sentence(),
        'tanggal_lahir'=>$faker->sentence(),
        'alamat' => $faker->sentence()
    ];
});
