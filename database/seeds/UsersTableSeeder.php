<?php

use Illuminate\Database\Seeder;
use Crater\User;
use Crater\Setting;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@mail.com',
            'name' => 'Administrador',
            'role' => 'admin',
            'password' => Hash::make('Administrador00')
        ]);

        Setting::setSetting('profile_complete', 0);
    }
}
