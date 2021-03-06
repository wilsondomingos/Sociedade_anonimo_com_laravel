@extends('layout.app4', ["current" => "home"])

@section('body')
@auth
<?php $val=0;
              foreach ($OBRAS as $ob){
              foreach ($carrinho as $carr){
              foreach ($artista as $art){


               if($carr->artista_id==$art->id && $carr->obra_id==$ob->id && auth::user()->id==$carr->user_id){
                     $val=$val+$ob->valor;

               }
            }
        }
    }

         ?>
<div class="conteudo container ">


    <main class="col-lg-12  ">
        <div class="">
            <section class="row carrinhos ">



                <div class="d-flex justify-content-around">

                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="col-lg-7">
                        <span>Seu Carrinho</span>
                        <img src="./img/icons/carrinhos.jpg" width="260px" alt="">
                    </div>
                </div>

                        <div class="col-lg-12">

                            <form action="/dados" method="POST">
                            @csrf
                                <div class="row">
                                    <input type="text" name="nome" placeholder="" value=" R$ {{ number_format($val ,2,',','.')}}">
                                </div>

                                <div class="row">
                                    <input type="hidden" name="obra" placeholder="" value="{{ $ob->id}}">
                                </div>
                                <div class="row">
                                    <input type="hidden" name="artista" placeholder="" value="{{ $ob->artista_id}}">
                                </div>

                                <div class="row mt-2">
                                    <div class="cal-lg-4 mr-5">
                                        <button type="submit" class=" btn btn-sm btn-outline-secondary">Comprar</button>
                                    </div>
                                    <div class="cal-lg-4 mr-5">

                                    </div>
                                </div>
                        </div>
                        </form>

                    </div>

                </div>

            </section>
             <div class="album py-5 bg-light linha mt-5 mb-5">
            <div class=" container mb-4 ">
                <h1>
                 Obras no Carrinho

              </div>
            <div class="container">
              <div class="row">

          @foreach ($OBRAS as $ob)
            @foreach ($carrinho as $carr)
            @foreach ($artista as $art)


             @if($carr->artista_id==$art->id && $carr->obra_id==$ob->id && auth::user()->id==$carr->user_id)
                <div class=" m-1 ml-4" style="width: 22.2rem;">
                    <div class="card-body ">
                      <h5 class="card-title">Obra: {{$ob->nome_da_obra}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">@foreach ( $usuario as $us)
                        @foreach ($artista as $art)

                        @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                        <p class="card-text">Artista: {{$us->name }} </p>
                        @endif
                        @endforeach
                        @endforeach</h6>
                      <img src="{{$ob->imagem}}" height="230px" class="card-img" alt="...">
                      <h6 class="card-subtitle mt-2 mb-2 text-muted">Valor: R$ {{number_format($ob->valor ,2,',','.')}}</h6>

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
                        <a href="carrinho/{{$carr->id}}" class="btn btn-sm btn-outline-danger">Remover do Carrinho</a>
                        <a href="/detalhe/{{$ob->id}}" class="btn btn-sm btn-outline-secondary">Detalhe</a>
                    </form>
                    </div>
                  </div>


         @endif
          @endforeach
          @endforeach

          @endforeach

          </div>
        </div>
      </div>
        </div>




    </main>


@endauth
@guest
<div class="container">
    <h4>Você não está logado</h4>
</div>
@endguest

@endsection
















