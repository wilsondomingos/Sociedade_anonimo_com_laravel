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
        $art =new \App\Artista();
        $art->rua = $request->input('rua');
        $art->cidade = $request->input('cidade');
        $art->estado = $request->input('estado');
        $art->cpf = $request->input('cpf');
        $art->rua = $request->input('rua');
        $art->imagem = $request->hasFile('imagem');
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
