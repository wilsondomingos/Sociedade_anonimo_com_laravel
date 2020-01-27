<?php

namespace App\Http\Controllers;
use App\Artistas;
use \App\User;
use App\Obras;
use Illuminate\Http\Request;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastro_obra');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\Artista::all();
        $Cat = \App\Categoria::all();
        return view('info_obra', compact('Cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obras =new \App\Obra();
        $obras->artista_id = $request->input('user_id');
        $obras->categoria_id = $request->input('categoria_id');
        $obras->valor=$request->input('preco');
        $obras->quantidade=$request->input('quantidade');
        $obras->nome_da_obra=$request->input('obra');
        $obras->criacao=$request->input('data');
        $obras->tamanho=$request->input('tamanho');
        $obras->tamanho=$request->input('tamanho');
        $obras->imagem = $request->hasFile('imagem');
        $obras->descricao=$request->input('descricao');
        $obras->save();
        return redirect()->route('perfil_user.estilo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function show(Obras $obras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function edit(Obras $obras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obras $obras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obras $obras)
    {
        //
    }
}
