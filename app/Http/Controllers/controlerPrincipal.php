<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\User;
use \App\Artista;
use \App\Estilo;
use \App\Obra;
use Illuminate\Support\Facades\Schema;
class controlerPrincipal extends Controller
{


    //=========================== Mosta o home da pagina ======================================
    public function index () {
          $OBRAS= \App\Obra::all();
          $artista= \App\Artista::all();
          $categoria= \App\Categoria::all();
          $usuario= \App\User::all();
          $estilo=\App\Estilo::all();
          return view('index', compact(['OBRAS','artista','categoria','usuario' ,'estilo']));
    }

    public function Consultar_Obras () {
        return view('/consultar');
    }

    //=========================== Mosta as pinturas da pagina ======================================
    public function pinturas () {

        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('pinturas', compact(['OBRAS','artista','categoria','usuario','estilo']));
    }


    //=========================== Mosta as fotografias da pagina ======================================
    public function fotografia () {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('fotografia', compact(['OBRAS','artista','categoria','usuario','estilo']));

    }


    //=========================== Mosta os desenhos da pagina ======================================
    public function desenhos () {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('desenhos', compact(['OBRAS','artista','categoria','usuario','estilo']));
    }

    //=========================== Mosta os prints da pagina ======================================
    public function prints () {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('prints', compact(['OBRAS','artista','categoria','usuario','estilo']));
    }

    //=========================== Mosta os quadradinhos da pagina ======================================
    public function hq () {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('hq', compact(['OBRAS','artista','categoria','usuario','estilo']));
    }

    //=========================== Mosta as esculturas da pagina ======================================
    public function escultura () {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('escultura', compact(['OBRAS','artista','categoria','usuario','estilo']));
    }

    //=========================== Mosta as arquiteturas da pagina ======================================
    public function arquitetura () {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        return view('arquitetura', compact(['OBRAS','artista','categoria','usuario','estilo']));
     
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


            $artista= \App\Artista::all();
            $OBRAS= \App\Obra::all();
            $categoria= \App\Categoria::all();
            $usuario= \App\User::all();
            $estilo=\App\Estilo::all();

            return view('perfil_user', compact(['OBRAS','artista','categoria','usuario','estilo',]));
    }

    public function vendidos(){


        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        return view('favorito', compact(['OBRAS','artista','categoria']));
}


}



