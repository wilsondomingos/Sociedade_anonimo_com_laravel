<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use  \App\Artista;
use  \App\Telefone;
use  \App\Obra;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        return view('admin');
    }
    public function listauser(){
        $artista = \App\Artista::all();
        $usuario = DB::table('users')
            ->orderByRaw('name')
            ->select('users.*')
            ->get();

        return view('adminListauser',compact('usuario'));
    }
    public function listaArtista(){
        $artista = DB::table('Artistas')
           ->join('users', 'Artistas.user_id', '=', 'users.id')
           ->join('telefones', 'Artistas.telefone_id', '=', 'telefones.id')
            ->orderByRaw('name')
            ->select('Artistas.*','users.name','telefones.telefone')
            ->get();
        return view('adminListaArtista',compact('artista'));
    }

    public function listaObra(){
        $Obras = DB::table('Obras')
           ->join('Artistas', 'Obras.artista_id', '=', 'Artistas.id')
           ->join('Categorias', 'Obras.categoria_id', '=', 'Categorias.id')
           ->join('Estilos', 'Obras.estilo_id', '=', 'Estilos.id')
           ->join('Users', 'Artistas.user_id', '=', 'Users.id')
            ->orderByRaw('name')
            ->select('Obras.*', 'users.name','Categorias.categoria','Estilos.estilo')
            ->get();
        return view('adminListaObras',compact('Obras'));

    }


}



