<?php

namespace App\Http\Controllers;

use App\Estilo;

use Illuminate\Http\Request;

class EstilosController extends Controller
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
        //$est = new Estilo();
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


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estilos  $estilos
     * @return \Illuminate\Http\Response
     */
    public function show(Estilos $estilos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estilos  $estilos
     * @return \Illuminate\Http\Response
     */
    public function edit(Estilos $estilos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estilos  $estilos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estilos $estilos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estilos  $estilos
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

        return redirect()->route('perfil_user.estilo');
    }
}
