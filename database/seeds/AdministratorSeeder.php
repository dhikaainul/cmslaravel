<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin ->name = "administrator";
        $admin ->email = "admindhika@gmail.com";
        $admin ->password = \Hash::make("dikawahyu");
        $admin ->roles = "Administrator";

        $admin ->save();

        $this->command->info("Admin Berhasil Ditambah");

    }
}
