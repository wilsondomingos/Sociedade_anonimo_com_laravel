@extends('layout.app4', ["current" => "home"])

@section('body')
<div class="conteudo container">
    

    <main class="col-lg-12  ">
     <div class="">
      <section class="row carrinhos ">

        <div class="d-flex justify-content-around">
        <div class="col-lg-7">
          <span>Seu Carrinho</span>
          <img src="./img/icons/carrinhos.jpg" width="260px" alt="">
        </div>
        </div>

        <div class="d-flex justify-content-around">
        <div>
          <div class="col-lg-4">
            <p id="tema">Um exemplo de pintura </p>
            <p> Fulano</p>
            <p>Belém - Brasil </p>
          </div>

          <div class="col-lg-4">
            <p> Pintura </p>
            <p>70cm - 50cm </p>
          </div>

          <div class="col-lg-4">
            <p> R$500,00 </p>
          </div>

          <div class="col-lg-12">
            <form action="{{ asset('dados') }}" method="GET">

              <div>
                <input type="text" name="nome" placeholder="00000-000">
              </div>

              <div class="row mt-2">
                <div class="cal-lg-4 mr-5">
                  <button type="submit">Calcule o frete</button>
                </div>
                <div class="cal-lg-4 mr-5">
                  <form method="GET">
                    <button class="control" type="submit">Dados da Conta</button>
                  </form>
                </div>
              </div>
           </div>
          </form>
          </div>

        </div>
      </section>
      </div>
    </main>
</div>
@endsection
