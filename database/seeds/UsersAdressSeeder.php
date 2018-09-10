<?php

use Illuminate\Database\Seeder;

class UsersAdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adresses')->insert([
            'N°_de_rue' => '1',
            'adresse' => 'place des coquelicots',
            'ville'=>'Larra',
            'code_postal'=>'31330',
        ]);

        DB::table('adresses')->insert([
            'N°_de_rue' => '2',
            'adresse' => 'champs de Mars',
            'ville'=>'Toulouse',
            'code_postal'=>'31000',
        ]);

        DB::table('adresses')->insert([
            'N°_de_rue' => '3',
            'adresse' => 'Avenue des champs elysées',
            'ville'=>'Paris',
            'code_postal'=>'75000',
        ]);

        DB::table('adresses')->insert([
            'N°_de_rue' => '4',
            'adresse' => 'Avenue des chars',
            'ville'=>'Lyon',
            'code_postal'=>'75000',
        ]);
    }
}
