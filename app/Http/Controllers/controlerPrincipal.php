<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
class controlerPrincipal extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    //=========================== Mosta o home da pagina ======================================
    public function index () {
        return view('/index');
    }
    public function Consultar_Obras () {
        return view('/consultar');
    }

    //=========================== Mosta as pinturas da pagina ======================================
    public function pinturas () {
        return view('/pinturas');
    }


    //=========================== Mosta as fotografias da pagina ======================================
    public function fotografia () {
        return view('/fotografia');
    }


    //=========================== Mosta os desenhos da pagina ======================================
    public function desenhos () {
        return view('/desenhos');
    }

    //=========================== Mosta os prints da pagina ======================================
    public function prints () {
        return view('/prints');
    }

    //=========================== Mosta os quadradinhos da pagina ======================================
    public function hq () {
        return view('/hq');
    }

    //=========================== Mosta as esculturas da pagina ======================================
    public function escultura () {
        return view('/escultura');
    }

    //=========================== Mosta as arquiteturas da pagina ======================================
    public function arquitetura () {
        return view('/arquitetura');
    }

    //=========================== Mosta as politica deprivacidade da pagina ============================
    public function politica_privacidade () {
        return view('/politica_privacidade');
    }

    //=========================== Mosta as termos de servico da pagina ===========================
    public function termos_servico () {
        return view('/termos_servico');
    }

    //=========================== Mosta as sobre a pagina ===========================
    public function sobre () {
        return view('/sobre');
    }

    public function estilo(){
        return view('perfil_user');
    }


}



