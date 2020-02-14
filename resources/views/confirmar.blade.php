@extends('layout.app4', ["current" => "home"])

@section('body')
 <div class="container">

    <main class="row container">

      <div class="col-lg-4  mt-5 ml-5">
        <span>Compras Realizada!</span>
        <img src="./img/icons/ok.jpg" width="300px" alt="">
      </div>
      <div class="col mt-5 ml-5">
        <div class="col-lg-12  mt-5 ml-5">
          <p>Um exemplo de pintura</p>
          <p>Fulano</p>
          <p>Belém - Brasil</p>
        </div>
        <div class="col-lg-12  mt-5 ml-5">
          <p>seu pedido será entregue dentro de 7 dias úteis</p>
        </div>
        <div class="col-lg-12 mt-5 ml-3 enter">
          <div>
            <li>
              <a href="{{ asset('index') }}">voltar para página inicial</a>
            </li>

            <li>
                <a href="factura" target="_blank">Gerar factura</a>
              </li>
          </div>
        </div>
      </div>
    </main>
@endsection
