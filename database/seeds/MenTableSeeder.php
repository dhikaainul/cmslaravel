<?php

use Illuminate\Database\Seeder;

class MenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Men::insert([
            [
              'nama'  => 'Dhika',
              'jenis_pakaian'=> 'INSPRD-HERMIONE',
              'komentar' => 'Bahan kain enak dipakai, adem',
            ],
            [
              'nama'  => 'Faiz',
              'jenis_pakaian' => 'INSPRD – SHASHIKO BLACK',
              'komentar' => 'Bahan pakaian lembut dan modelnya keren',
            ],
            [
              'nama'  => 'Rafli',
              'jenis_pakaian' => 'INSPRD – ALISTER',
              'komentar'   => 'Backpagenya sangat keren dipakai kemanapun',
            ],
        ]);
    }
}
