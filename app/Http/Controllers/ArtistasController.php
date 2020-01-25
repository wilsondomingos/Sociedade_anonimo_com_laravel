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
        return view('info_artista');
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
        //
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
