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
            <a href="{{asset('perfil_user ')}}"class="btn-outline-secondary text-dark"> Perfil </a>
        </li>

        <li>
            <a href="{{asset('favorito')}}"class="btn-outline-secondary text-dark"> Favoritos </a>
        </li>
        <li>
            <a href="{{asset('info_obra')}}"class="btn-outline-secondary text-dark">Cadastrar obras</a>
        </li>

     </ul>
     <h4 class="container text-center mt-5">Favoritos</h4>
     <hr>

</div>
        </div>
      </div>


</div>

<div class="container my-3 mt-4">


 <div class="album py-5 bg-light linha">
        <div class="container">
          <div class="row">


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
