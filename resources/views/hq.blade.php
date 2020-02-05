@extends('layout.app2', ["current" => "home"])

@section('body')
<div class=" container  navbar-light  ">
    <h1>
      HQ - QUADRADINHO
    </h1>
  </div>
  <!-- inicio do quadro lado a lado -->

  @component('componente_consulta')
@endcomponent
  <div class="col-md-9 linha">

          <div class="container-fluid my-3">

            <div class="row">

            @foreach ($OBRAS as $ob)
            @foreach ($categoria as $cat)
            @if($cat->categoria=="HQ" && $ob->categoria_id==$cat->id)


                <div class="col-md-6 col-lg-3 mb-sm-3">
                 <div class="card h-100">
                <img src="/storage/{{$ob->imagem}}" class="card-img-top" alt="...">
                <div class="card-body  ">
                    <h1 class="card-title">Obra: {{$ob->nome_da_obra}}</h1>
                    <h1 class="card-title">Quantidade: {{$ob->quantidade}}</h1>
                    <p class="card-text">Valor: {{$ob->valor}}</p>
                    <p class="card-text">Criação: {{$ob->criacao}}</p>
                   @foreach ( $usuario as $us)
                   @foreach ($artista as $art)

                     @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                    <p class="card-text">Artista: {{$us->name }}  </p>
                      @endif
                      @endforeach
                      @endforeach

                      @foreach ($categoria as $cat)
                     @if($ob->categoria_id == $cat->id)

                    <p class="card-text">Categoria: {{$cat->categoria }}  </p>

                      @endif
                      @endforeach


                      @foreach ($estilo as $est)


                      @if($ob->estilo_id==$est->id)

                        <p class="card-text">Estilo: {{$est->estilo }}  </p>

                      @endif


                      @endforeach

                           <form action="carrinho/store" method="POST">
                            @csrf
                            <input type="hidden" name="obra_id" value="{{ $ob['id'] }}">
                            <input type="hidden" name="artista_id" value="{{ $ob['artista_id'] }}">
                            <input type="hidden" name="user_id" value="{{ auth::user()->id}}">
                            <button type="submit" class="btn btn-sm btn-outline-success">Add Carrinho</button>
                          </form>
                </div>
            </div>
        </div>
          @endif
          @endforeach
          @endforeach
          </div>

@endsection
