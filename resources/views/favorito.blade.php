@extends('layout.app8', ["current" => "home"])

@section('body')
@auth
   <aside>


  </aside>

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

  <div class="container conteudo-perfil">
    <div class="foto-perfil">

    </div>
    <div class="nome-perfil mt-4 ml-3">
      <h2>{{auth::user()->name}}</h2>
    </div>
  </div>
  <div class="container">
    <span>
    </span>
  </div>

  <div class="container my-3 mt-4">

    <div class="row">
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/carrossel/1.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Neptune and the pillares of Hercules</h5>
            <p class="card-text">de Willen Basse</p>
            <p class="card-text">POSTER 40cm x 20cm</p>
            <p class="card-text">R$ 150,00 </p>
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
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/fotos/building-covered-with-fog-2973102.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Nome da obra</h5>
            <p class="card-text">Autor</p>
            <p class="card-text">Tipo xx cm x xx cm</p>
            <p class="card-text">R$ xxx,xx </p>
            <div class="d-flex flex-row-reverse">
              <a class="icons" href="compras.html">
                <img class="icons" src="img/icons/mais bolça.svg" width="23px" alt="bolca">
              </a>
              </li>
              <a class="icons" href="">
                <img class="icons" src="img/local_mall-24px.svg" alt="bolca">
              </a>
            </div>
            <!-- <a href="#" class="btn btn-primary">Comprar</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/desenho/1.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Nome da obra</h5>
            <p class="card-text">Autor</p>
            <p class="card-text">Tipo xx cm x xx cm</p>
            <p class="card-text">R$ xxx,xx </p>
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
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/prints/0289050.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Nome da obra</h5>
            <p class="card-text">Autor</p>
            <p class="card-text">Tipo xx cm x xx cm</p>
            <p class="card-text">R$ xxx,xx </p>
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
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/HQ/15573452165cd333c080e5e_1557345216_3x2_md.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Neptune and the pillares of Hercules</h5>
            <p class="card-text">de Willen Basse</p>
            <p class="card-text">POSTER 40cm x 20cm</p>
            <p class="card-text">R$ 150,00 </p>
            <div class="d-flex flex-row-reverse">
              <a class="icons" href="compras.html">
                <img class="icons" src="img/icons/mais bolça.svg" width="23px" alt="bolca">
              </a>
              </li>
              <a class="icons" href="">
                <img class="icons" src="img/local_mall-24px.svg" alt="bolca">
              </a>
            </div>
            <!-- <a href="#" class="btn btn-primary">Comprar</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/escultura/0f80d1c981888bc120abfecbd147a1af.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Nome da obra</h5>
            <p class="card-text">Autor</p>
            <p class="card-text">Tipo xx cm x xx cm</p>
            <p class="card-text">R$ xxx,xx </p>
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
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/arquiteto/4-vantagens-para-contratar-um-arquiteto-para-decoracao-770x433.jpeg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Neptune and the pillares of Hercules</h5>
            <p class="card-text">de Willen Basse</p>
            <p class="card-text">POSTER 40cm x 20cm</p>
            <p class="card-text">R$ 150,00 </p>
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
      <div class="col-md-6 col-lg-3 mb-sm-3">
        <div class="card h-100">
          <img src="img/carrossel/arte-773x1030.jpg" class="card-img-top" alt="...">
          <div class="card-body  m-3">
            <h5 class="card-title">Neptune and the pillares of Hercules</h5>
            <p class="card-text">de Willen Basse</p>
            <p class="card-text">POSTER 40cm x 20cm</p>
            <p class="card-text">R$ 150,00 </p>
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
