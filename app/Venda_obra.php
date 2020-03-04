<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda_obra extends Model
{
    function artistas(){
        return $this->hasMany('App\Artista');
    }

    function obras(){
        return $this->belongsToMany("App\Obra");
    }


    function usuarios(){
        return $this->hasMany('App\User');
    }
}
