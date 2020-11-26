<?php

use Illuminate\Database\Seeder;

class UserrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Userr::insert([
            [
              'nama'  => 'Dhika Ainul Luthfi',
              'image'=>'image/profil2.jpg',
              'no_hp'=>'0881026812702',
              'jenis_kelamin'=>'Laki-laki',
              'tanggal_lahir' => '21 Mei 2000',
              'alamat'=>'Ds. Lecari Kec. Sukorejo Kab. Pasuruan',
            ],    
        ]);
    }
}
