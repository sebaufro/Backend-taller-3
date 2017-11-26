<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
        	'descripcion' => 'Tenis',
        ]);
        DB::table('categoria')->insert([
        	'descripcion' => 'Football',
        ]);
        DB::table('categoria')->insert([
        	'descripcion' => 'Basketball',
        ]);
    }
}
