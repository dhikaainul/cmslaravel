<?php

use Illuminate\Database\Seeder;

class LakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Laki::insert([
            [
              'title'  => 'INSPRD-HERMIONE',
              'price'=>'Rp. 120.000',
              'size'=>'SIZE : S M L XL',
              'image'=>'image/bajulaki2.jpg',
              'content' => 'Bahan kain dari serat bambu sangat mudah terurai (degredable) dan dingin saat dipakai',
              'created_at'=>'2020-10-17',
            ],
            [
                'title'  => 'INSPRD - SHASHIKO BLACK',
                'price'=>'Rp. 192.000',
                'size'=>'SIZE : S M L XL',
                'image'=>'image/sweaterlaki.jpg',
                'content' => 'Bahan baby terry sangat lembut, halus dan ringan ketika dipakai',
                'created_at'=>'2020-10-17',
            ],
            [
                'title'  => 'INSPRD - ALISTER',
                'price'=>'Rp. 192.000',
                'size'=>'SIZE : S M L XL',
                'image'=>'image/backpagelaki.jpg',
                'content' => 'Sangat nyaman digunakan untuk pergi kesekolah ataupun pergi liburan',
                'created_at'=>'2020-10-17',
            ],
        ]);
    }
}
