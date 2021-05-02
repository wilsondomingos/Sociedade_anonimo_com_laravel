<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    function Obras(){
        return $this->hasOne('App\Obra');
    }
}
