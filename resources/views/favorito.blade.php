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

         <div class="mt-5 ml-3">
           <h2>{{auth::user()->name}}</h2>
           <hr>
        </div>

        </div>
             <div class="menu-perfil mb-5">

    
       <ul>

         <li>
            <a href="{{asset('telefone')}} " class="btn-outline-success text-dark"> Tornar Artistista </a>
          </li>

        <li>
            <a href="{{asset('perfil_user ')}}"class="btn-outline-success text-dark"> Vendas </a>
        </li>

        <li>
            <a href="{{asset('favorito')}}"class="btn-outline-success text-dark"> Favoritos </a>
        </li>
        <li>
            <a href="{{asset('info_obra')}}"class="btn-outline-success text-dark">Cadastrar obras</a>
        </li>
     </ul>
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
