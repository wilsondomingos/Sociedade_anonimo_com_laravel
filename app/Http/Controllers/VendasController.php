<?php

namespace App\Http\Controllers;

use App\Vendas;
use\App\Artista;
use \App\Obra;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //============================== Carrinho de compras ==================================================
    public function carrinho()
    {
        return view('/carrinho');
    }

    //============================== Confirmar compras ==================================================
    public function confirmar()
    {
        return view('/confirmar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //============================== Cadastrar  compras ==================================================
    public function create()

    {
        $artista= \App\Artista::all();
        $OBRAS= \App\Obra::all();
        $categoria= \App\Categoria::all();
        $usuario= \App\User::all();
        $estilo=\App\Estilo::all();
        $carrinho = \App\Carrinho::all();
        return view('carrinho', compact(['OBRAS','artista','categoria','usuario','estilo','carrinho']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrinho = new \App\Carrinho();
        $carrinho->obra_id = $request->input('obra_id');
        $carrinho->artista_id = $request->input('artista_id');
        $carrinho->user_id = $request->input('user_id');
        $carrinho->save();
        return redirect('index');

    }

    public function dados()
    {
        return view('dados');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function show(Vendas $vendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendas $vendas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendas $vendas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendas $vendas)
    {
        //
    }
}
