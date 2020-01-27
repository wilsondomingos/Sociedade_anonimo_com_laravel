<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    function obras(){
        return $this->belongsToMany("App\Obra","Venda_obra");
    }
}
