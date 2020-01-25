@extends('layout.app6', ["current" => "home"])

@section('body')


 <div class="d-flex justify-content-center mt-5">

<form action="categoria_obra/store" method="POST">
 @csrf
<h4 class="mb-3">USER, O QUE VOCÊ QUER VENDER?</h4>
            <select class="form-control mb-5" name="categoria"id="categoria">
                <option >PINTURAS</option>
                <option>FOTOGRAFIAS</option>
                <option>DESENHOS</option>
                <option>PRINTS</option>
                <option>HQ</option>
                <option>ESCULTURAS</option>
                <option>ARQUITETURA</option>
                <option>OUTROS</option>
            </select>



   <select class="form-control mb-5" name="estilo_id"id="estilo_id">
        @foreach($Estilo as $est)
            <option value="{{ $est['id'] }}">{{ $est['estilo']}}</option>
        @endforeach

      </select>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="{{asset('info_obra')}}"class="btn btn-danger">cancelar</a>
	</form>
	</div>
@endsection
