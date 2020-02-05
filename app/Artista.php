<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    function telefones(){
        return $this->hasMany('App\Telefone');
    }

    function obras(){
        return $this->belongsTo('App\Obra');
    }
    function user(){
        return $this->hasOne('App\User');
    }

}
