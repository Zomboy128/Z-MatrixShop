<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'David Chavarria',
            'username' => 'admin',
            'email' => 'david.chavarria2@gmail.com',
            'password' => bcrypt('Equinox1995'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Oswaldo Chavarria',
            'username' => 'user',
            'email' => 'david.chavarria2@hotmail.com',
            'password' => bcrypt('Equinox1995'),
        ]);
    }
}
