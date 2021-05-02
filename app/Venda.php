<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    function usuarios(){
        return $this->hasMany('App\User');
    }
}
