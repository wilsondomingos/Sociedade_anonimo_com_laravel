@extends('layouts.app')

@section('content')

  <div class="container ">

          <div class="container-fluid my-3 ">

            <div class="row ">

            @foreach ($Obras as $ob)



               <div class=" m-1 ml-4" style="width: 23.2rem;">
                    <div class="card-body ">
                      <h5 class="card-title">Obra: {{$ob->nome_da_obra}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">

                        <p class="card-text">Artista: {{$ob->name }} </p>
                        </h6>

                      <img src="/storage/{{$ob->imagem}}" height="230px" class="card-img" alt="...">
                      <h6 class="card-subtitle mt-2 mb-2 text-muted">Valor: {{$ob->valor}}</h6>
                      <h6 class="card-subtitle  mb-2 text-muted">Quantidade: {{$ob->quantidade}}</h6>
                      <h6 class="card-subtitle  mb-2 text-muted"> {{$ob->categoria}}</h6>
                      <h6 class="card-subtitle  mb-2 text-muted"> {{$ob->categoria}}</h6>

                        <h6 class="card-subtitle  mb-2 text-muted"></h6>

                    </div>
                  </div>
                  @endforeach

          </div>
          <a href="{{asset('admin')}}" class="btn btn-sm btn-outline-secondary ">Voltar ao painel</a>


        </div>
    </div>
@endsection




