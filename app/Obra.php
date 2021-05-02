<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    function artistas(){
        return $this->hasMany('App\Artista');
    }

    function carrinho(){
        return $this->belongsTo('App\Carrinho');
    }
    function categorias(){
        return $this->hasMany('App\Categoria');
    }
    function estilos(){
        return $this->hasMany('App\Estilo');
    }

}
