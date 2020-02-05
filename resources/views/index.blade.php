@extends('layout.app', ["current" => "home"])

@section('body')
@auth
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
<div class=" container  navbar-light  ">
    <h1>
        <section class="info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>

                            </ol>
                            <!--==============================================================-->

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>

                                        <div class="card">
                                        <div class="">
                                            <img src="./img/Slide pinturas/1.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->
                                        <div class="card bg-success">
                                        <div class="">
                                            <img src="./img/Slide pinturas/2.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Zeus</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 2</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 600 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="mt-4 ml-3">Joao@hotmail.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">

                                                    <p><strong>Nome da obra:</strong> Mascara</p>
                                                    <p><strong>Quantidade:</strong> 10</p>
                                                    <p><strong>Valor:</strong> 300 R$</p>
                                                    <p><strong>Categoria:</strong> Desenho</p>
                                                    <p><strong>Estilo:</strong> FINE ARTR</p>

                                            </div>
                                            <p class="mt-5">Flavia@hotmail.com</p>
                                        </div>
                                        <div class="card ">
                                        <div class="">
                                            <img src="./img/Slide pinturas/3.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Flavia M. Domingos</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->
                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/4.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">


                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong> Milton Artur</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Leão Africano</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 13</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 150 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>
                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">milton@hotmail.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                   <p><strong>Nome da obra:</strong> Gato Iheu</p>
                                                    <p><strong>Quantidade:</strong> 3</p>
                                                    <p><strong>Valor:</strong> 1000 R$</p>
                                                    <p><strong>Categoria:</strong> FOTOGRAFIA</p>
                                                    <p><strong>Estilo:</strong> MODERNA</p>
                                            </div>
                                            <p class="mt-5">Fabio.md@fabio.com</p>
                                        </div>
                                        <div class="card ">
                                            <div class="">
                                            <img src="./img/Slide pinturas/glen-hooper-8LWtpfhGP4U-unsplash.jpg"
                                                class="img-responsive imaSombra" width="230px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Fabio Tunga</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/6.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>Fernando Catumbela</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rosa</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 9</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Amor de Rei</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 800 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">Teu.md@.com</p>
                                        </div>
                                        <div class="card">
                                            <div class="">
                                            <img src="./img/Slide pinturas/7.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Teu M. Domingos</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/8.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>Jureuma Baia</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Mufassa</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 200 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">Jureuma@Jureuma.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card">
                                            <div class="">
                                            <img src="./img/Slide pinturas/9.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/10.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>
                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">


                                                <div class="mb-5 ">
                                                    <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                    <p><strong>Quantidade:</strong> 3</p>
                                                    <p><strong>Valor:</strong> 400 R$</p>
                                                    <p><strong>Categoria:</strong> Desenho</p>
                                                    <p><strong>Estilo:</strong> FINE ARTR</p>
                                                </div>

                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card ">
                                            <div class="">
                                            <img src="./img/Slide pinturas/10.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->
                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/11.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card ">
                                            <div class="">
                                            <img src="./img/Slide pinturas/12.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/13.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/15.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/16.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->
                                <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <div class="container mt-5">
            <h2>
                Destaques | Artes de semana selecionadas pela nossa curadoria
            </h2>
        </div>
        <div class="album py-5 bg-ligth linha">
            <div class="container">
                <div class="row">

                    @foreach ($OBRAS as $ob)



                    <div class="col-md-6 col-lg-3 mb-sm-3">
                        <div class="card h-100">
                            <img src="/storage/{{$ob->imagem}}" class="card-img-top" alt="...">
                            <div class="card-body  bg-link">
                                <h1 class="card-title">Obra: {{$ob->nome_da_obra}}</h1>
                                <h1 class="card-title">Quantidade: {{$ob->quantidade}}</h1>
                                <p class="card-text">Valor: {{$ob->valor}}</p>
                                <p class="card-text">Criação: {{$ob->criacao}}</p>
                                @foreach ( $usuario as $us)
                                @foreach ($artista as $art)

                                @if($us->id == $art->user_id && $art->id == $ob->artista_id )
                                <p class="card-text">Artista: {{$us->name }} </p>
                                @endif
                                @endforeach
                                @endforeach

                                @foreach ($categoria as $cat)
                                @if($ob->categoria_id == $cat->id)

                                <p class="card-text">Categoria: {{$cat->categoria }} </p>

                                @endif
                                @endforeach


                                @foreach ($estilo as $est)


                                @if($ob->estilo_id==$est->id)

                                <p class="card-text">Estilo: {{$est->estilo }} </p>

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

                    @endforeach
                </div>
            </div>
        </div>



        <!-- inicio do quadro lado a lado -->
        @endauth
        @guest
<div class=" container  navbar-light  ">
    <h1>
        <section class="info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>

                            </ol>
                            <!--==============================================================-->

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        success
                                        <div class="card">
                                        <div class="">
                                            <img src="./img/Slide pinturas/1.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->
                                        <div class="card bg-success">
                                        <div class="">
                                            <img src="./img/Slide pinturas/2.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Zeus</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 2</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 600 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="mt-4 ml-3">Joao@hotmail.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">

                                                    <p><strong>Nome da obra:</strong> Mascara</p>
                                                    <p><strong>Quantidade:</strong> 10</p>
                                                    <p><strong>Valor:</strong> 300 R$</p>
                                                    <p><strong>Categoria:</strong> Desenho</p>
                                                    <p><strong>Estilo:</strong> FINE ARTR</p>

                                            </div>
                                            <p class="mt-5">Flavia@hotmail.com</p>
                                        </div>
                                        <div class="card ">
                                        <div class="">
                                            <img src="./img/Slide pinturas/3.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Flavia M. Domingos</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->
                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/4.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">


                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong> Milton Artur</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Leão Africano</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 13</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 150 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>
                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">milton@hotmail.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                   <p><strong>Nome da obra:</strong> Gato Iheu</p>
                                                    <p><strong>Quantidade:</strong> 3</p>
                                                    <p><strong>Valor:</strong> 1000 R$</p>
                                                    <p><strong>Categoria:</strong> FOTOGRAFIA</p>
                                                    <p><strong>Estilo:</strong> MODERNA</p>
                                            </div>
                                            <p class="mt-5">Fabio.md@fabio.com</p>
                                        </div>
                                        <div class="card ">
                                            <div class="">
                                            <img src="./img/Slide pinturas/glen-hooper-8LWtpfhGP4U-unsplash.jpg"
                                                class="img-responsive imaSombra" width="230px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Fabio Tunga</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/6.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>Fernando Catumbela</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rosa</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 9</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Amor de Rei</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 800 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">Teu.md@.com</p>
                                        </div>
                                        <div class="card">
                                            <div class="">
                                            <img src="./img/Slide pinturas/7.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Teu M. Domingos</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/8.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>Jureuma Baia</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Mufassa</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 200 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">Jureuma@Jureuma.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card">
                                            <div class="">
                                            <img src="./img/Slide pinturas/9.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                            </div>
                                        </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/10.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>
                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">


                                                <div class="mb-5 ">
                                                    <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                    <p><strong>Quantidade:</strong> 3</p>
                                                    <p><strong>Valor:</strong> 400 R$</p>
                                                    <p><strong>Categoria:</strong> Desenho</p>
                                                    <p><strong>Estilo:</strong> FINE ARTR</p>
                                                </div>

                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card ">
                                            <div class="">
                                            <img src="./img/Slide pinturas/10.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->
                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/11.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card ">
                                            <div class="">
                                            <img src="./img/Slide pinturas/12.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/13.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">

                                            <div class="mb-5 ">
                                                <p><strong>Nome da obra:</strong> Rei Ombo</p>
                                                <p><strong>Quantidade:</strong> 3</p>
                                                <p><strong>Valor:</strong> 400 R$</p>
                                                <p><strong>Categoria:</strong> Desenho</p>
                                                <p><strong>Estilo:</strong> FINE ARTR</p>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/15.jpg"
                                                class="img-responsive imaSombra" width="200px" alt="">
                                                <p class="mt-3 ml-2 nome"><strong> Artista:</strong> Wilson M. Domingos</p>
                                        </div>
                                    </div>
                                        <!--==============================================================-->

                                        <div class="card bg-success">
                                            <div class="">
                                            <img src="./img/Slide pinturas/16.jpg"
                                                class="img-responsive imaSombra" width="280px" alt="">
                                        </div>
                                    </div>
                                        <div class="col-lg-3 text-rigth">

                                            <p class="mt-1 ml-2 nome"><strong> Artista:</strong>João Velozo</p>
                                            <p  class=" ml-3 nome"><strong>Nome da obra:</strong> Rei Ombo</p>
                                            <p class=" ml-3 nome"><strong>Quantidade:</strong> 3</p>
                                            <p class=" ml-3 nome"><strong>Valor:</strong> 400 R$</p>
                                            <p class=" ml-3 nome"><strong>Categoria:</strong> Desenho</p>
                                            <p class=" ml-3 nome"><strong>Estilo:</strong> FINE ARTR</p>

                                            <p class="ml-3 ">

                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <!--==============================================================-->
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

                <div class="container mt-5">
                    <h2>
                        Destaques | Artes de semana selecionadas pela nossa curadoria
                    </h2>
                </div>
                <div class="container">
                    <h4>Você não está logado</h4>
                </div>
                @endguest
                @endsection
