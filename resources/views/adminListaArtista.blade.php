@extends('layouts.app')

@section('content')





<div class="container album py-5 bg-light  mb-5">
        <div class="album py-5 bg-light ">
    <div class="row cor">


@foreach ($artista as $art)


    <div class="card border-dark mb-5 ml-2" style="max-width: 24rem;">
  <div class="card-header bg-dark text-white border-dark ">Nome: {{$art->name}}</div>
  <img src="/storage/{{$art->imagem}}"  class="card-img-top" id="perfi" alt="">
  <div class="card-body text-dark">
    <h5 class="card-title">Telefone: {{$art->telefone}}</h5>
      <h5 class="card-title">Rua: {{$art->rua}}</h5>
      <h5 class="card-title">Cidade: {{$art->cidade}}</h5>
      <h5 class="card-title">Estado: {{$art->estado}}</h5>
      <h5 class="card-title">CPF: {{$art->cpf}}</h5>
  </div>
</div>
@endforeach

</div>
<a href="{{asset('admin')}}" class="btn btn-sm btn-outline-secondary ">Voltar ao painel</a>
</div>

</div>
</div>

@endsection
