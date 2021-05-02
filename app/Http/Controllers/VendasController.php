<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Venda;
use \App\Venda_obra;
use\App\Artista;
use \App\Obra;
use \App\carrinho;
use \App\User;
use PDF;
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
        $carr = Carrinho::count('id');
        //$carrinhos = new \App\Carrinho();

        return view('/carrinho',compact('carr'));
    }

    //============================== Confirmar compras ==================================================
    public function confirmar()

    {
        return view('/confirmar');
    }

    public function factura()

    {
        $userLogado=auth()->User()->id;
        //dd($userLogado);
        $vendas = Venda::where('user_id', $userLogado)->get();
        $Obra_vendidas = Venda_obra::where('user_id', $userLogado)->get();
        $obras =\App\Obra::all();
        /*->join('users', 'vendas.user_id', '=', $userLogado)
        ->join('venda_obras', 'venda_obras.user_id', '=', 'Vendas.user_id')
        ->join('Obras', 'Obras.id', '=', 'venda_obras.obra_id')
        ->join('Artistas', 'Artistas.id', '=', 'venda_obras.artista_id')
         ->select('Vendas.*','users.*','Artistas.*','Obras.*')
         ->get();
         */
         //dd($venda);
        $pdf=PDF::loadView('factura',compact(['vendas','Obra_vendidas','obras']));
        return  $pdf->setPaper('a4')->stream('factura.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //============================== Cadastrar  compras ==================================================
    public function create()

    {

        $idcarr=\App\Carrinho::select('obra_id');
        $idart=\App\Artista::select('id');
        $valor=\App\Obra::select('valor') ->where('id',$idcarr and 'artista_id',$idart)->get();


        $valor = DB::table('carrinhos')
        ->join('obras', 'obras.id', '=', 'carrinhos.obra_id')
        ->join('artistas', 'artistas.id', '=', 'carrinhos.artista_id')
        ->select ('obras.*','obras.valor')
        ->get();



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
        $venda_obra=new \App\Venda_obra();

        $carrinho->obra_id = $request->input('obra_id');
        $carrinho->artista_id = $request->input('artista_id');
        $carrinho->user_id = $request->input('user_id');
        $carrinho->save();


        $venda_obra->obra_id = $request->input('obra_id');
        $venda_obra->artista_id = $request->input('artista_id');
        $venda_obra->user_id = $request->input('user_id');
        $venda_obra->save();


        return redirect('carrinho');

    }

    public function dados(Request $request)
    {
        $arti= \App\Artista::all();
        $val=$request->input('nome');
        $obra=$request->input('obra');
        $artista=$request->input('artista');
        //dd( $val);
        return view('dados',compact(['val','obra','artista','arti']));
    }

    public function  RegistarVendas(Request $request)
    {


        $regras=[

                  'rua'=>'required',
                  'numero'=>'required',
                  'compl'=>'required|numeric',

                  'cpf'=>'required|min:14|max:14',

                  'nome'=>'required',
                  'nº'=>'required',
                  'valor'=>'required|numeric',
                  //'user_id'=>'required|numeric',
                  'quantidade'=>'required',



              ];
              $mensagens=[
                  //mensagem unuversal para todos campos
                  'required'=>'O campo :attribute não pode estar em branco',
                  //'tamanho'=>'É necessário no minimo 34 X 34  para o tamanho',
                  'numeric'=>'O valor do compo :attribute deve ser numerico',

                  'cpf'=>'É necessário no minimo 14 e no maximo 14 caracteres para o cpf',
                  'unique'=>'O cpf deve ser unico'


              ];

       // $request->validate( $regras,$mensagens);
        $vendas =new Venda();
        $vendas->rua = $request->input('rua');
        $vendas->numero = $request->input('numero');
        $vendas->comp = $request->input('compl');

        $vendas->cpf=$request->input('cpf');
        $vendas->nome_comprador=$request->input('nome');
        $vendas->conta=$request->input('nº');
        $vendas->valor=$request->input('valor');
        $vendas->user_id=$request->input('user_id');
        $vendas->quantidade=$request->input('quantidade');
        $vendas->save();
        //return view('factura', compact('vendas'));
        return redirect('confirmar');
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
    public function destroy( $id)
    {

        $carrinho = Carrinho::find($id);


        if (isset($carrinho)) {
            $carrinho->delete();
        }
        return redirect('carrinho');
    }




}


