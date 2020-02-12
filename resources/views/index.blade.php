@extends('layout.app8', ["current" => "home"])

@section('body')
@auth


<div class=" container  navbar-light  ">


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="/img/carrossel/aluno.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel ">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna</p>

                  </div>
                </div>
            </div>
            <div class="carousel-item">

                <img src="img/carrossel/glen-hooper-8LWtpfhGP4U-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna.</p>
                  </div>
                </div>

            </div>
            <div class="carousel-item">
                <img src="/img/carrossel/tim-mossholder-qWWmzXrbGd0-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna.</p>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carrossel/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna.</p>
                  </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5">
        <h2>
            Destaques | Artes de semana selecionadas pela nossa curadoria
        </h2>
    </div>
    <div class="album py-5 bg-light linha mb-5">
        <div class="container">
          <div class="row">

                @foreach ($OBRAS as $ob)


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
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Add Carrinho</button>
                        <a href="/detalhe/{{$ob->id}}" class="btn btn-sm btn-outline-secondary">Detalhe</a>
                    </form>
                    </div>
                  </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>




    <!-- inicio do quadro lado a lado -->
    @endauth
    @guest
    <div class=" container  navbar-light  ">


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="/img/carrossel/aluno.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel ">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna</p>

                  </div>
                </div>
            </div>
            <div class="carousel-item">

                <img src="img/carrossel/glen-hooper-8LWtpfhGP4U-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna.</p>
                  </div>
                </div>

            </div>
            <div class="carousel-item">
                <img src="/img/carrossel/tim-mossholder-qWWmzXrbGd0-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna.</p>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carrossel/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="d-flex flex-row bd-highlight mt-5">

                    <p class="texto-carosel">Artista: Wilson Domingos <br>Obra: Lá Sombrinha amarela <br>Categoria: Fotografia <br>Estilo: Moderna.</p>
                  </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <h4>Você não está logado</h4>
    </div>

    @endguest
    @endsection
