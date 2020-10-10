<?php

use Illuminate\Database\Seeder;

class WomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Women::insert([
            [
              'nama'  => 'Sofia',
              'jenis_pakaian'=> 'I QUEEN – CROMBY',
              'komentar' => 'Bahan kain enak dipakai lembut dan adem',
            ],
            [
              'nama'  => 'Firda',
              'jenis_pakaian' => 'I QUEEN – QUIRLY',
              'komentar' => 'Bahan pakaian lembut dan modelnya kece',
            ],
            [
              'nama'  => 'Nabila',
              'jenis_pakaian' => 'I QUEEN – ELIZAJANE',
              'komentar'   => 'Backpagenya ringan dan kuat',
            ],
        ]);
    }
}
