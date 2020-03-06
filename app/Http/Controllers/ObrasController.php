<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Obra;
use \App\Categoria;
use \App\Estilo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $artista = \App\Artista::all();
        $telefone = \App\Telefone::all();
        $Cat = \App\Categoria::all();
        $Estilo = \App\Estilo::all();
        $usuario= \App\User::all();
        $ob = Obra::find($id);
        return view('detalhe', compact(['ob','Estilo','Cat','artista','usuario','telefone','Cat']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artista = \App\Artista::all();
        $Cat = \App\Categoria::all();
        $Estilo = \App\Estilo::all();
        return view('info_obra', compact(['Cat','Estilo','artista']));
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

      'preco'=>'required|numeric',
            'quantidade'=>'required|numeric',

            'obra'=>'required|min:3|max:45',
            'data'=>'required|date',
            'tamanho'=>'required',

            'imagem' => 'required|dimensions:min_width=6000,min_height=6000',
            'imagem' => 'required|mimes:jpeg,bmp,png,jpg',
            'descricao'=>'required|min:10|max:2000',

        ];
        $mensagens=[
            //mensagem unuversal para todos campos
            'required'=>'O campo :attribute não pode estar em branco',
            //'tamanho'=>'É necessário no minimo 34 X 34  para o tamanho',
            'numeric'=>'O valor do compo :attribute deve ser numerico',

            'obra'=>'É necessário no minimo 3 e no maximo 45 caracteres para o obra',


            //mensagens para a imagem
            'imagem'=>'A imagem deve ter o minimo de largura=100 e o minimo de altura =200',
            //mensagens para a imagem
             'imagem'=>'o formato da imagem deve ser jpeg,bmp ou png ',
             'descricao'=>'É necessário no minimo 100 e no maximo 2000 caracteres para o descrição',

        ];
        $request->validate( $regras,$mensagens);
        $user=\App\User::all();
        $art = \App\Artista::all();
        $obras =new Obra();
        if(request()->file('imagem')){
            $path=$request->file('imagem')->store('imagens','public');
            $obras['imagem'] = Storage::disk('public')->url($path, "imagens");
        }


        $obras->artista_id = $request->input('user_id');
        $obras->categoria_id = $request->input('categoria_id');
        $obras->estilo_id = $request->input('estilo_id');

        $obras->valor=$request->input('preco');
        $obras->quantidade=$request->input('quantidade');
        $obras->nome_da_obra=$request->input('obra');
        $obras->criacao=$request->input('data');
        $obras->tamanho=$request->input('tamanho');

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
    public function show(Request $obras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cat = \App\Categoria::all();
        $Estilo = \App\Estilo::all();
        $ob = Obra::find($id);
       //dd($ob->imagem);
       return view('editar_obra', compact(['ob','Estilo','Cat']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $regras=[
            'preco'=>'required|numeric',
            'quantidade'=>'required|numeric',

            'obra'=>'required|min:3|max:45',
            'data'=>'required|date',
            'tamanho'=>'required',


            'imagem' => 'mimes:jpeg,bmp,png,jpg',
            'descricao'=>'required|min:10|max:2000',

        ];
        $mensagens=[
            //mensagem unuversal para todos campos
            'required'=>'O campo :attribute não pode estar em branco',
            //'tamanho'=>'É necessário no minimo 34 X 34  para o tamanho',
            'numeric'=>'O valor do compo :attribute deve ser numerico',

            'obra'=>'É necessário no minimo 3 e no maximo 45 caracteres para o obra',


            //mensagens para a imagem
            'imagem'=>'A imagem deve ter o minimo de largura=100 e o minimo de altura =200',
            //mensagens para a imagem
             'imagem'=>'o formato da imagem deve ser jpeg,bmp ou png ',
             'descricao'=>'É necessário no minimo 100 e no maximo 2000 caracteres para o descrição',

        ];
        $request->validate( $regras,$mensagens);
        $obras = \App\Obra::find($id);
        if(request()->file('imagem')){
            $path=$request->file('imagem')->store('imagens','public');
            $obras['imagem'] = Storage::disk('public')->url($path, "imagens");
        }

        $obras->artista_id = $request->input('user_id');
        $obras->categoria_id = $request->input('categoria_id');
        $obras->estilo_id = $request->input('estilo_id');

        $obras->valor=$request->input('preco');
        $obras->quantidade=$request->input('quantidade');
        $obras->nome_da_obra=$request->input('obra');
        $obras->criacao=$request->input('data');
        $obras->tamanho=$request->input('tamanho');
        $obras->descricao=$request->input('descricao');
        $obras->save();

        return redirect()->route('perfil_user.estilo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

        $obs = Obra::find($id);
        if (isset($obs)) {
            $obs->delete();
        }
        return redirect()->route('perfil_user.estilo');
    }
}

