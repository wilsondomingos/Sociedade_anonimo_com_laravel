@extends('layout.app8', ["current" => "home"])
@section('body')
@auth
<aside>


</aside>



<div class="container conteudo-perfil">
    <div class="album py-5 bg-light linha">
    <div class="row cor">

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
            <a href="{{asset('telefone')}} " class=" btn-outline-secondary text-dark"> Tornar Artistista </a>
       </li>


   
        <li>
            <a href="{{asset('perfil_user ')}}"class="btn-outline-secondary text-dark"> Vendas </a>
        </li>

        <li>
            <a href="{{asset('favorito')}}"class="btn-outline-secondary text-dark"> Favoritos </a>
        </li>
        <li>
            <a href="{{asset('info_obra')}}"class="btn-outline-secondary text-dark">Cadastrar obras</a>
        </li>
     </ul>
</div>
        </div>
      </div>


</div>


<div class="container my-3 mt-4">


 <div class="album py-5 bg-light linha">
        <div class="container">
          <div class="row">

        @foreach ($OBRAS as $ob)

               @if($ob->artista_id== auth::user()->id)


                <div class=" m-1 ml-4" style="width: 24.2rem;">
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

                        <input type="hidden" name="user_id" value="{{ auth::user()->id}}">
                         <a href="info_obra/{{$ob->id}}" class="btn btn-sm btn-outline-danger">Apagar</a>
                        <a href="/info_obra/editar/{{$ob->id}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        <a href="/detalhe/{{$ob->id}}" class="btn btn-sm btn-outline-secondary">Detalhe</a>
                    </form>
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
