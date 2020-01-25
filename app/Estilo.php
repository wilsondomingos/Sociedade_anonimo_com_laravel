<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    function categorias(){
        return $this->hasMany('App\Categoria');
    }
    
}
