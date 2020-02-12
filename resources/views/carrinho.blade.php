@extends('layout.app4', ["current" => "home"])

@section('body')
@auth

<div class="conteudo container ">


    <main class="col-lg-12  ">
        <div class="">
            <section class="row carrinhos ">



                <div class="d-flex justify-content-around">
                      <div class="d-flex justify-content-around">
                    <div class="col-lg-7">
                        <span>Seu Carrinho</span>
                        <img src="./img/icons/carrinhos.jpg" width="260px" alt="">
                    </div>
                </div>

                        <div class="col-lg-12">
                            <form action="{{ asset('dados') }}" method="GET">

                                <div>
                                    <input type="text" name="nome" placeholder="00000-000">
                                </div>

                                <div class="row mt-2">
                                    <div class="cal-lg-4 mr-5">
                                        <button type="submit" class=" btn btn-sm btn-outline-secondary">Calcule o frete</button>
                                    </div>
                                    <div class="cal-lg-4 mr-5">
                                        <form method="GET">
                                            <button class=" btn btn-sm btn-outline-secondary" type="submit">Dados da Conta</button>
                                        </form>
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
                </h1>

              </div>
            <div class="container">
              <div class="row">

          @foreach ($OBRAS as $ob)
            @foreach ($carrinho as $carr)
            @foreach ($artista as $art)


             @if($carr->artista_id==$art->id && $carr->obra_id==$ob->id && auth::user()->id==$carr->user_id)
                <div class="col-md-6 col-lg-3 mb-sm-3">
                 <div class="card h-100">
                <img src="/storage/{{$ob->imagem}}" class="card-img-top" alt="...">
                <div class="card-body  ">
                    <h1 class="card-title">Obra: {{$ob->nome_da_obra}}</h1>
                    <h1 class="card-title">Quantidade: {{$ob->quantidade}}</h1>
                    <p class="card-text">Valor: {{$ob->valor}}</p>
                    <p class="card-text">Criação: {{$ob->criacao}}</p>
                    @foreach ( $usuario as $us)


                     @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                    <p class="card-text">Artista: {{$us->name }}  </p>
                      @endif

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

                </div>

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
