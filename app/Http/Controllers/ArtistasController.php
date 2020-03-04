<?php

namespace App\Http\Controllers;

use App\Artistas;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telefone = \App\Telefone::all();
        $usuario = \App\User::all();
        return view('info_artista',compact('telefone','usuario'));
    }

    public function createTelefone()
    {
        return view('telefone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras=[
            'rua'=>'required|min:3|max:45|',
            'cidade'=>'required|min:3|max:45',
            'estado'=>'required|min:3|max:45',
            'cpf'=>'required|min:14|max:14',
            'foto' => 'required|dimensions:min_width=100,min_height=200',
            'foto' => 'required|mimes:jpeg,bmp,png',

        ];
        $mensagens=[
            //mensagem unuversal para todos campos
            'required'=>'O campo :attribute não pode estar em branco',
            //'min'=>'É necessário no minimo 3 caracteres para :attribute',
            //'max'=>'É necessário no maximo 45 caracteres para :attribute',

            //'cpf'=>'É necessário no minimo 11 numeros para o cpf',
            'cpf'=>'É necessário no minimo 14 e no maximo 14 caracteres para o cpf',
            //'cpf.unique'=>'O cpf deve ser unico',
            'estado.min'=>'É necessário no minimo 3  caracteres para o estado',
            'estado.max'=>'É necessário no  no maximo 45 caracteres para o estado',
            'cidade.min'=>'É necessário no minimo 3 caracteres para a cidade',
            'cidade.max'=>'É necessário no  maximo 45 caracteres para a cidade',
            'rua.min'=>'É necessário no minimo 3 caracteres para a rua',
            'rua.max'=>'É necessário no maximo 45 caracteres para a rua',

            //mensagens para a imagem
            'foto.dimensions'=>'A imagem deve ter o minimo de largura=100 e o minimo de altura =200',
            //mensagens para a imagem
             'foto.mimes'=>'o formato da imagem deve ser jpeg,bmp ou png '

        ];
        $request->validate( $regras,$mensagens);

        $art =new \App\Artista();
        $path=$request->file('foto')->store('imagens','public');
        $art->rua = $request->input('rua');
        $art->cidade = $request->input('cidade');
        $art->estado = $request->input('estado');
        $art->cpf = $request->input('cpf');
        $art->imagem = $path;
        $art->user_id = $request->input('user_id');
        $art->telefone_id = $request->input('telefone_id');

        $art->save();
        return redirect()->route('perfil_user.estilo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artistas  $artistas
     * @return \Illuminate\Http\Response
     */
    public function show(Artistas $artistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artistas  $artistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Artistas $artistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artistas  $artistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artistas $artistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artistas  $artistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artistas $artistas)
    {
        //
    }
}
