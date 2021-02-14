<?php

use App\Produto;
use App\Categoria;

Route::get('/categorias', function () {
    $cat = Categoria::all();

    if(count($cat) === 0){
        echo "<h4>Você não possui categorias cadastradas</h4>";
    }else{
        foreach($cat as $c){
            echo "<p>".$c->id." - ".$c->name."</p>";
        }
    }
});

Route::get('/produtos', function(){
    $prod = Produto::all();

    if(count($prod) === 0){
        echo "<h4>Você não possui produtos cadastrados</h4>";
    }else{
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Preco</td><td>Estoque</td><td>Categoria</td></tr><thead>";
        echo "<tbody>";
        foreach($prod as $p){
            echo "<tr><td>".$p->name."</td><td>".$p->preco."</td><td>".$p->estoque."</td><td>".$p->categoria->name."</td><tr>";
        }
        echo "</tbody>";
    }
});

Route::get('/categorias/produtos', function(){
    $cat = Categoria::all();

    if(count($cat) === 0){
        echo "<h4>Você não possui categorias cadastradas</h4>";
    }else{
        foreach($cat as $c){
            echo "<p>".$c->id." - ".$c->name."</p>";
            $produtos = $c->produtos;

            if(count($produtos) > 0) {
                echo "<ul>";
                foreach($produtos as $p) {
                    echo "<li>". $p->name."</li>";
                }
                echo "</ul>";
            }
        }
    }
});

Route::get('/categorias/produtos/json', function(){
    /* Lazy Loading */
    $cats = Categoria::with('produtos')->get();
    return $cats->toJson();
});

Route::get('/adicionarproduto', function(){
    $cat = Categoria::find(1);
    $p = new Produto();
    $p->name = "Meu Novo Produto";
    $p->estoque = 100;
    $p->preco = 20.0;
    $p->categoria()->associate($cat);
    $p->save();
    return $p->toJson();
});

Route::get('/removerprodutocategoria', function(){
    $p = Produto::find(10);

    if(isset($p)){
        /* Desasociar produtos das categorias*/
        $p->categoria()->dissociate();
        $p->save();
        return $p->toJson();
    }
    return '';
});

Route::get('/adicionarproduto/{catid}', function($catid){
    $cat = Categoria::with('produtos')->find($catid);

    $p = new Produto();
    $p->name = "Meu novo Produto adicionado";
    $p->estoque = 38;
    $p->preco = 400;

    if(isset($cat)){
        $cat->produtos()->save($p);
    }
    $cat->load('produtos');
    return $cat->toJson();
});