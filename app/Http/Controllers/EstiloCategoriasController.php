<?php

namespace App\Http\Controllers;

use App\Estilo_categorias;
use Illuminate\Http\Request;

class EstiloCategoriasController extends Controller
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
        return view('estilo_obra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estilo_categorias  $estilo_categorias
     * @return \Illuminate\Http\Response
     */
    public function show(Estilo_categorias $estilo_categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estilo_categorias  $estilo_categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(Estilo_categorias $estilo_categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estilo_categorias  $estilo_categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estilo_categorias $estilo_categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estilo_categorias  $estilo_categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estilo_categorias $estilo_categorias)
    {
        //
    }
}
