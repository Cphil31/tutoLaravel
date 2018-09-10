<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Paul',
            'email' => 'paul@gmail.com',
            'password' => bcrypt('secret'),
        ]);

       DB::table('users')->insert([
            'name' => 'Alain',
            'email' => 'alain@gmail.com',
            'password' => bcrypt('secret'),
        ]);

       DB::table('users')->insert([
            'name' => 'Philippe',
            'email' => 'philippe@gmail.com',
            'password' => bcrypt('secret'),
        ]);

           DB::table('users')->insert([
            'name' => 'Jean Louis',
            'email' => 'JeanLouis@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
