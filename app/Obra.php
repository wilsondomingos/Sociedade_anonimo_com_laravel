<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    function artistas(){
        return $this->hasMany('App\Artista');
    }

    function vendas(){
        return $this->belongsTo('App\Venda');
    }

    function carrinho(){
        return $this->hasMany('App\Carrinho');
    }
    function categorias(){
        return $this->hasMany('App\Categoria');
    }

}
