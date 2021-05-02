<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    function artistas(){
        return $this->belongsTo('App\Artista');
    }
}
