<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    function artistas(){
        return $this->hasMany('App\Artista');
    }

    function vendas(){
        return $this->belongsToMany("App\Venda","Venda_obra");
    }

    function carrinho(){
        return $this->hasMany('App\Carrinho');
    }
    function categorias(){
        return $this->hasMany('App\Categoria');
    }
    function estilos(){
        return $this->hasMany('App\Estilo');
    }

}
