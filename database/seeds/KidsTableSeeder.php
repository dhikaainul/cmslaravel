<?php

use Illuminate\Database\Seeder;

class KidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kids::insert([
            [
              'nama'  => 'Wahyu',
              'jenis_pakaian'=> 'INSPRD – KD HELMUT #2 – WHIS 1.4',
              'komentar' => 'Bahan kain enak dipakai, adem',
            ],
            [
              'nama'  => 'Nasrul',
              'jenis_pakaian' => 'INSPRD – KD HELMUT #2 – WHIS 1.4',
              'komentar' => 'Bahan pakaian lembut dan modelnya keren',
            ],
            [
              'nama'  => 'Noval',
              'jenis_pakaian' => 'INSPRD – KD SHASKHA – WHIS 1.3',
              'komentar'   => 'Bahannya tidak mudah kusut',
            ],
        ]);
    }
}
