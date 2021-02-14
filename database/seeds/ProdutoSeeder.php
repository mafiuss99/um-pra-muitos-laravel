<?php

use Illuminate\Database\Seeder;
use App\Produto;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::insert([
            'name' => 'Camiseta Polo', 
            'preco' => 100,
            'estoque' => 4,
            'categoria_id' => 1
        ]);
        Produto::insert([
            'name' => 'Calça Jeans', 
            'preco' => 120,
            'estoque' => 1,
            'categoria_id' => 1
        ]);
        Produto::insert([
            'name' => 'Camisa Manga Longa', 
            'preco' => 34,
            'estoque' => 2,
            'categoria_id' => 1
        ]);
        Produto::insert([
            'name' => 'PC Games', 
            'preco' => 56,
            'estoque' => 4,
            'categoria_id' => 5
        ]);
        Produto::insert([
            'name' => 'Impressora', 
            'preco' => 37,
            'estoque' => 5,
            'categoria_id' => 5
        ]);
        Produto::insert([
            'name' => 'Mouse', 
            'preco' => 37,
            'estoque' => 5,
            'categoria_id' => 5
        ]);
        Produto::insert([
            'name' => 'Perfume', 
            'preco' => 55,
            'estoque' => 7,
            'categoria_id' => 3
        ]);
        Produto::insert([
            'name' => 'Cama de Casal', 
            'preco' => 11,
            'estoque' => 8,
            'categoria_id' => 4
        ]);
        Produto::insert([
            'name' => 'Móveis', 
            'preco' => 11,
            'estoque' => 8,
            'categoria_id' => 4
        ]);
    }
}
