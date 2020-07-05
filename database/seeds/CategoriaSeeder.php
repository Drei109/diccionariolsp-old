<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['descripcion' => "alimentos"],
            ['descripcion' => "frutas"],
            ['descripcion' => "verduras"],
            ['descripcion' => "otros alimentos"],
            ['descripcion' => "bebidas"],
            ['descripcion' => "comidas"],
        ]);
    }
}
