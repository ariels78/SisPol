<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('users')->insert(array(
            'name' => 'Carlos',
            'email' => 'ariels7801@gmail.com',
            'password' => \Hash::make('secret'),
            'type' => 'Administrador',
        ));
    }
}