<?php

namespace App\Http\Controllers;

use App\Telefone;
use Illuminate\Http\Request;

class TelefonesController extends Controller
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
            'telefone'=>'required|min:3|max:45|'
        ];
        $mensagens=[
             //mensagem para o email
             'telefone.unique'=>'este telefone já foi cadastrado'

        ];
        $request->validate( $regras,$mensagens);

        $tele = new \App\Telefone();
        $tele->telefone = $request->input('telefone');
        $tele->save();
        return redirect('telefone');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function show(Telefones $telefones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefones $telefones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telefones $telefones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefones $telefones)
    {
        //
    }
}
