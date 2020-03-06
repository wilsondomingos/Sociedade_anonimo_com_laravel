@extends('layout.app4', ["current" => "home"])

@section('body')
@auth
<div class=" conteudo container d-flex justify-content-center">

    <article class="d-flex justify-content-center">

      <section>
        <div>
          <span>Seu Carrinho</span>
          <img src="img/icons/carrinhos.jpg" width="100px" alt="ddd">
        </div>
        <form action="/confirmar" method="POST">
        @csrf
          <div>
            <div>
              <div class="endereco">
                <span>ENDEREÇO DE ENTREGA</span>
              </div>
              <div class="rua">
                <div>
                  <label for="rua">Rua</label>
                  <input type="text" name="rua" class="{{$errors->has('rua') ? 'is-invalid' : ''}}">
                   @if ($errors->has('rua'))
                    <div class="invalid-feedback">
                        {{$errors->first('rua')}}
                    </div>
                 @endif
                </div>

                <div>
                 <div>
                  <label for="numero">Numero de Casa</label>
                  <input  type="text" name="numero" class=" {{$errors->has('numero') ? 'is-invalid' : ''}}">
                 @if ($errors->has('numero'))
                    <div class="invalid-feedback">
                        {{$errors->first('numero')}}
                    </div>
                 @endif
              </div>
              </div>

            </div>
            <div class="compl">
              <div>
                <label for="coml">Compl</label>
                <input type="text" name="compl" class=" {{$errors->has('compl') ? 'is-invalid' : ''}}">
                 @if ($errors->has('compl'))
                    <div class="invalid-feedback">
                        {{$errors->first('compl')}}
                    </div>
                 @endif
              </div>

              <div>
                <label for="cpl">CPF</label>
                   @foreach($arti as $art)
                   @if($art->user_id==auth::user()->id)
                <input type="text" name="cpf" class=" {{$errors->has('cpf') ? 'is-invalid' : ''}}"value="{{ $art['cpf'] }}">
                   @endif
                @endforeach

               @if ($errors->has('cpf'))
                    <div class="invalid-feedback">
                        {{$errors->first('cpf')}}
                    </div>
                 @endif
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
                <input type="text" name="nome" value="{{ auth::user()->name}}" placeholder="{{ auth::user()->name}}"class=" {{$errors->has('nome') ? 'is-invalid' : ''}}">
                 @if ($errors->has('nome'))
                    <div class="invalid-feedback">
                        {{$errors->first('nome')}}
                    </div>
                 @endif
              </div>

              <div>
                <label for="nº">Conta</label>
                <input type="text" name="nº" class=" {{$errors->has('nº') ? 'is-invalid' : ''}}">
                  @if ($errors->has('nº'))
                    <div class="invalid-feedback">
                        {{$errors->first('nº')}}
                    </div>
                 @endif
              </div>
            </div>
              <div>
                <label for="quantidade">Qunatidade</label>
                <input type="text" name="quantidade" class=" {{$errors->has('quantidade') ? 'is-invalid' : ''}}">
                  @if ($errors->has('quantidade'))
                    <div class="invalid-feedback">
                        {{$errors->first('quantidade')}}
                    </div>
                 @endif
              </div>
            </div>
              <div class="row">
                <input type="hidden" name="valor" placeholder="<?php echo $val.' '.'R$'; ?>" value="{{ $val}}">
            </div>
            <div class="row">
                <input type="hidden" name="user_id" placeholder="<?php echo auth::user()->id.' '.'R$'; ?>" value="{{ auth::user()->id}}">
            </div>

            <div class="confimacao">
              <div class="d-flex justify-content-between">
                <div>
                  <span>{{$val}}</span>
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
 @endauth
@guest
    <div class="container">
        <h4>Você não está logado</h4>
    </div>

    @endguest
@endsection
