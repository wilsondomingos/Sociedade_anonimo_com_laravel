<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    public function usurio()
    {
        return $this->hasOne('App\User');
    }
    public function obras()
    {
        return $this->belongsTo('App\Obra');
    }
    function artista(){
        return $this->hasOne('App\Artista');
    }
}
