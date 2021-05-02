@extends('layout.app6', ["current" => "home"])

@section('body')
@auth

 <div class="d-flex justify-content-center mt-5">
<form action="estilo_obra/store" method="POST">
    @csrf
<h4 class="mb-3">QUAL É O ESTILO DA SUA OBRA?</h4>

            <select class="form-control mb-5 {{$errors->has('estilo') ? 'is-invalid' : ''}}" name="estilo" id="estilo">
                <option>FINE ART</option>
                <option>ABSTRATA</option>
                <option>MODERNA</option>
                <option>ART POP</option>
                <option>STREET ART</option>
                <option>REALISMO</option>
                <option>SURREALISMO</option>
                <option>OUTROS</option>

            </select>
            @if ($errors->has('estilo'))
                    <div class="invalid-feedback">
                        {{$errors->first('estilo')}}
                    </div>
                 @endif
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="{{asset('categoria_obra')}}"class="btn btn-warning">Continuar</a>


      </select>

		</form>
	</div>
    @endauth
            @guest
            <div class="container">
                <h4>Você não está logado</h4>
            </div>
            @endguest
@endsection
