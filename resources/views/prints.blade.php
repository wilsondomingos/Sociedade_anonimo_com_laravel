@extends('layout.app8', ["current" => "home"])

@section('body')
@auth
<div class=" container  navbar-light  ">
    <h1>
      PRINTS
    </h1>
  </div>
  <!-- inicio do quadro lado a lado -->
 @component('componente_consulta')
@endcomponent
  <div class="col-md-9 linha mb-5">

          <div class="container-fluid my-3">

            <div class="row">

            @foreach ($OBRAS as $ob)
            @foreach ($categoria as $cat)
            @if($cat->categoria=="PRINTS" && $ob->categoria_id==$cat->id)


               <div class=" m-1 ml-4" style="width: 30.2rem;">
                    <div class="card-body ">
                      <h5 class="card-title">Obra: {{$ob->nome_da_obra}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">@foreach ( $usuario as $us)
                        @foreach ($artista as $art)

                        @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                        <p class="card-text">Artista: {{$us->name }} </p>
                        @endif
                        @endforeach
                        @endforeach</h6>
                      <img src="/storage/{{$ob->imagem}}" height="230px" class="card-img" alt="...">
                      <h6 class="card-subtitle mt-2 mb-2 text-muted">Valor: {{$ob->valor}}</h6>
                      <h6 class="card-subtitle  mb-2 text-muted">Quantidade: {{$ob->quantidade}}</h6>
                      <h6 class="card-subtitle  mb-2 text-muted">@foreach ($categoria as $cat)
                        @if($ob->categoria_id == $cat->id)
                        <p class="card-text">Categoria: {{$cat->categoria }} </p>
                        @endif
                        @endforeach</h6>
                        <h6 class="card-subtitle  mb-2 text-muted">@foreach ($estilo as $est)
                            @if($ob->estilo_id==$est->id)
                            <p class="card-text">Estilo: {{$est->estilo }} </p>
                            @endif
                            @endforeach</h6>
                      <form action="carrinho/store" method="POST">
                        @csrf
                        <input type="hidden" name="obra_id" value="{{ $ob['id'] }}">
                        <input type="hidden" name="artista_id" value="{{ $ob['artista_id'] }}">
                        @if(auth::user()->id==$ob->artista_id)

                         @else
                        <input type="hidden" name="user_id" value="{{ auth::user()->id}}">
                        <button type="submit" class="btn btn-sm btn-outline-info">Add Carrinho</button>
                        @endif
                        <a href="/detalhe/{{$ob->id}}" class="btn btn-sm btn-outline-secondary">Detalhe</a>
                    </form>
                    </div>
                  </div>
          @endif
          @endforeach
          @endforeach
          </div>
              @endauth
            @guest
    <div class="container">
        <h4>Você não está logado</h4>
    </div>

    @endguest
@endsection
