<?php

use Illuminate\Database\Seeder;

class PerempuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Perempuan::insert([
            [
              'title'  => 'I QUEEN – QUIRLY',
              'price'=>'Rp. 144.000',
              'size'=>'SIZE : S M L XL',
              'image'=>'image/bajuprmpn.jpg',
              'content' => 'Terbuat dari bahan cotton combed yang mempunyai permukaan yang halus dan lembut.',
              'created_at'=>'2020-10-17',
            ],
            [
                'title'  => 'I QUEEN – CROMBY',
                'price'=>'Rp. 264.000',
                'size'=>'SIZE : S M L XL',
                'image'=>'image/jaketprmpn.jpg',
                'content' => 'Bahan baby terry sangat lembut, halus dan ringan ketika dipakai',
                'created_at'=>'2020-10-17',
            ],
            [
                'title'  => 'I QUEEN – ELIZAJANE',
                'price'=>'Rp. 112.000',
                'size'=>'SIZE : S M L XL',
                'image'=>'image/backpageprmpn.jpg',
                'content' => 'Terbuat dari bahan taslan waterproof memiliki keunggulan yaitu ringan dan tahan sobek (kuat).',
                'created_at'=>'2020-10-17',
            ],
        ]);
    }
}
