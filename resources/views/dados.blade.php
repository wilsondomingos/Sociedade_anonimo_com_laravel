@extends('layout.app4', ["current" => "home"])

@section('body')
<div class=" conteudo container d-flex justify-content-center">

    <article class="d-flex justify-content-center">

      <section>
        <div>
          <span>Seu Carrinho</span>
          <img src="img/icons/carrinhos.jpg" width="100px" alt="ddd">
        </div>
        <form action="{{ asset('confirmar') }}" method="GET">
          <div>
            <div>
              <div class="endereco">
                <span>ENDEREÇO DE ENTREGA</span>
              </div>
              <div class="rua">
                <div>
                  <label for="rua">Rua</label>
                  <input type="text" name="rua">
                </div>

                <div>
                  <label for="nº">Nº</label>
                  <input class="numero" type="text" name="nº">
                </div>
              </div>

            </div>
            <div class="compl">
              <div>
                <label for="coml">Compl</label>
                <input type="text" name="compl">
              </div>

              <div>
                <label for="cpl">CPF</label>
                <input type="text" name="cpf">
              </div>
            </div>
            <!--===========================================================================================-->

            <div>
              <div class="icones">
                <img src="./img/icons/master1.png" alt="caixa" width="20px">
                <img src="./img/icons/master2.png" alt="visa" width="20px">
                <img src="./img/icons/master3.png" alt="amex" width="20px">
              </div>

            </div>
            <div class="compl">
              <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome">
              </div>

              <div>
                <label for="nº">Nº</label>
                <input type="text" name="nº">
              </div>
            </div>
            <div class="confimacao">
              <div class="d-flex justify-content-between">
                <div>
                  <span>Total R$525,10</span>
                </div>
              </div>
              <div class="">
                <button class=" btn btn-lg btn-outline-dark" type="submit">Confirmar</button>
              </div>
            </div>
          </div>
        </form>
      </section>


    </article>

  </div>

@endsection
