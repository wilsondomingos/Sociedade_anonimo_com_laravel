@extends('layout.app8', ["current" => "home"])
@section('body')
@auth
<aside>


</aside>



<div class="container conteudo-perfil">
    <div class="album py-5 bg-light linha">
    <div class="row">

                 @foreach($artista as $art)
                 @if(auth::user()->id == $art->user_id)

                <img src="/storage/{{$art->imagem}}"  class="card-img-top" id="perfi" alt="">
                @endif
                @endforeach

         <div class="mt-5 ml-5">

           <h2>{{auth::user()->name}}</h2>
            <hr>
        </div>

        </div>
             <div class="menu-perfil mb-5">

       <ul>
        <li>
            <a href="{{asset('telefone')}}"> Tornar Artistista </a>
        </li>
        <li>
            <a href="{{asset('perfil_user')}}"> Vendas </a>
        </li>

        <li>
            <a href="{{asset('favorito')}}"> Favoritos </a>
        </li>
        <li>
            <a href="{{asset('estilo_obra')}}">Cadastrar obras</a>
        </li>
     </ul>
</div>
        </div>
      </div>


</div>
<div class="container">
    <span>
    </span>
</div>

<div class="container my-3 mt-4">


 <div class="album py-5 bg-light linha">
        <div class="container">
          <div class="row">

            @foreach ($OBRAS as $ob)

@if($ob->artista_id== auth::user()->id)
                <div class="col-md-6 col-lg-3 mb-sm-3">
                 <div class="card h-100">
                <img src="/storage/{{$ob->imagem}}" class="card-img-top" alt="...">
                <div class="card-body  m-3">
                    <h1 class="card-title">Obra: {{$ob->nome_da_obra}}</h1>
                    <h1 class="card-title">Quantidade: {{$ob->quantidade}}</h1>
                    <p class="card-text">Valor: {{$ob->valor}}</p>
                    <p class="card-text">Criação: {{$ob->criacao}}</p>



                    @foreach ( $usuario as $us)
                   @foreach ($artista as $art)

                     @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                    <p class="card-text">Artista: {{auth::user()->name}}  </p>
                      @endif
                      @endforeach
                      @endforeach

                     @foreach ($categoria as $cat)
                     @if($ob->categoria_id == $cat->id)

                    <p class="card-text">Categoria: {{$cat->categoria }}  </p>

                      @endif
                      @endforeach

                </div>
            </div>
        </div>

 @endif
         @endforeach
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
