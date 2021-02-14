<?php

use Illuminate\Database\Seeder;
use App\Categoria;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::insert(['name' => 'Roupas']);
        Categoria::insert(['name'=> 'Eletrônicos']);
        Categoria::insert(['name'=> 'Móveis']);
        Categoria::insert(['name'=> 'Alimentos']);
        Categoria::insert(['name'=> 'Informática']);
        
    }
}
