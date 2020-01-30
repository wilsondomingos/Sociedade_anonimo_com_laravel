@extends('layout.app', ["current" => "home"])

@section('body')
@auth
<div class=" container  navbar-light  ">
    <h1>
        <section class="info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="20"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="21"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="22"></li>
                            </ol>


                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/1.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/2.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/3.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/4.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/5.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/6.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/7.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/8.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/9.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/10.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>
                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/10.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/11.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/12.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/13.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/15.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/16.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
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
 <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

            @foreach ($OBRAS as $ob)



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
                      @foreach ($categoria as $cat)

                      @if($est->id==$ob->categoria_id && $cat->id==$cat->estilo_id)

                        <p class="card-text">Estilo: {{$est->estilo }}  </p>

                      @endif

                      @endforeach
                      @endforeach

                    <div class="d-flex flex-row-reverse">
                        <a class="icons" href="compras.html">
                            <img class="icons" src="img/icons/mais bolça.svg" width="23px" alt="bolca">
                        </a>
                        </li>
                        <a class="icons" href="">
                            <img class="icons" src="img/local_mall-24px.svg" alt="bolca">
                        </a>
                    </div>
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
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="20"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="21"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="22"></li>
                            </ol>


                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/1.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/2.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/3.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/4.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/5.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/6.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/7.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/8.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/9.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/10.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>
                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/10.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/11.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/12.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/13.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-lg-3 text-right col-sm-12">
                                            <h4 class="mb-5 nome">Wilson M. Domingos</h4>
                                            <div class="mb-5 ">
                                                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Totam similique sapiente minus vero? Dicta
                                                    natus veritatis error totam molestias dolore dolores eveniet neque
                                                    expedita blanditiis, quod nam
                                                    in ipsum veniam.
                                                </span>
                                            </div>
                                            <p class="mt-5">wilson.md@wilson.com</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/15.jpg" class="img-responsive imaSombra"
                                                width="200px" alt="">
                                        </div>

                                        <div class="col-lg-3">
                                            <img src="./img/Slide pinturas/16.jpg" class="img-responsive imaSombra"
                                                width="280px" alt="">
                                        </div>
                                        <div class="col-lg-3 text-rigth">

                                            <h4 class="mb-5 ml-3 nome">João Velozo</h4>

                                            <p class="ml-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Totam similique sapiente minus vero? Dicta
                                                natus veritatis error totam molestias dolore dolores eveniet neque
                                                expedita blanditiis, quod nam
                                                in ipsum veniam.
                                            </p>

                                            <p class="mt-5 ml-3">wilson.md@wilson.com</p>
                                        </div>

                                    </div>
                                </div>
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

