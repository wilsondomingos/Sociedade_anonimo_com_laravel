<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    function estilos(){
        return $this->belongsTo('App\Estilo');
    }
}
