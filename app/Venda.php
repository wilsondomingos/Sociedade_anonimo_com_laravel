<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    function obras(){
        return $this->hasMany('App\Obra');
    }
}
