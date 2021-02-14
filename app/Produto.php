<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    function categoria(){
        /* Nesse caso o produto só tem 1 categoria, logo se usa a função belongsTo()*/
        return $this->belongsTo('App\Categoria');
    }
}
