<?php

use Illuminate\Database\Seeder;

class AnakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anak::insert([
            [
              'title'  => 'INSPRD – KD HELMUT #2 – WHIS 1.4',
              'price'=>'Rp. 80.000',
              'size'=>'SIZE : S M L XL',
              'image'=>'image/bajukids.jpg',
              'content' => 'Bahan kain dari serat bambu sangat mudah terurai (degredable) dan dingin saat dipakai.',
              'created_at'=>'2020-10-17',
            ],
            [
                'title'  => 'INSPRD – KD SHASKHA – WHIS 1.3',
                'price'=>'Rp. 120.000',
                'size'=>'SIZE : S M L XL',
                'image'=>'image/kemejakids.jpg',
                'content' => 'Bahan yang tidak mudah kusut',
                'created_at'=>'2020-10-17',
            ],
        ]);
    }
}
