<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    function Obras(){
        return $this->haOne('App\Obra');
    }

}
