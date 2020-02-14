

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



@extends('layout.app6', ["current" => "home"])

@section('body')

@auth

<div class="container my-3 mt-4">


 <div class="album py-5 bg-light linha">
        <div class="container">
          <div class="row">


    <div class="">





                <div class=" m-1 ml-4" style="width: 24.2rem;">
                    <div class="card-body ">
                    @foreach ( $usuario as $us)
                    @foreach ($artista as $art)

                    @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                    <img src="/storage/{{$art->imagem}}" height="230px" class="card-img" id="perfi" alt="...">
                    @endif
                    @endforeach
                    @endforeach
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        @foreach ( $usuario as $us)
                        @foreach ($artista as $art)

                        @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Artista: {{$us->name }} </h6>

                        @endif
                        @endforeach
                        @endforeach

                        @foreach ($artista as $art)
                        @foreach ( $telefone as $tel)


                        @if($tel->id == $art->telefone_id && $art->id == $ob->artista_id )

                        <h6 class="card-subtitle mt-2 mb-2 text-muted">{{$tel->telefone }} </h6>

                        @endif
                        @endforeach
                        @endforeach

                        @foreach ( $usuario as $us)
                        @foreach ($artista as $art)

                        @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Rua: {{$art->rua}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Cidade: {{$art->cidade}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Estado: {{$art->estado}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">CPF: {{$art->cpf}}</h6>

                        @endif
                        @endforeach
                        @endforeach
                        <p class="card-text"><small class="text-muted"></small></p>

                    </div>
                </div>

            </div>

        </div>

                <div class=" m-1 ml-4" style="width: 44.2rem;">
                    <div class="card-body ">

                   <img src="/storage/{{$ob->imagem}}" height="430px" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Preço: {{$ob->valor}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Quantidade: {{$ob->quantidade}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Nome da obra : {{$ob->nome_da_obra}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Data de criação : {{$ob->criacao}}</h6>

                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Tamanho : {{$ob->tamanho}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Descricão : {{$ob->descricao}}</h6>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted"><small class="text-muted"></small></h6>
                        @foreach ($Cat as $cat)
                        @if($ob->categoria_id == $cat->id)
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">Categoria: {{$cat->categoria }} </h6>
                        @endif
                        @endforeach</h6>
                        <h6 class="card-subtitle  mb-2 text-muted">@foreach ($Estilo as $est)
                            @if($ob->estilo_id==$est->id)
                            <h6 class="card-subtitle mt-2 mb-2 text-muted">Estilo: {{$est->estilo }} </h6>
                            @endif
                            @endforeach</h6>
                        <a href="/index" class="btn btn-sm btn-outline-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endauth
    @guest
    <div class="container">
        <h4>Você não está logado</h4>
    </div>
    @endguest
    @endsection
</body>
</html>
