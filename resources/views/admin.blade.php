@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card ">
                <div class="card-header bg-dark text-white">Painel - Administrador</div>

                <div class="">
                    <div class="list-group ">
                        <a href="{{asset('adminListauser')}}" class="list-group-item list-group-item-action ">Todos usuários </a>
                        <a href="{{asset('adminListaArtista')}}" class="list-group-item list-group-item-action ">Todos Artistas</a>
                        <a href="{{asset('adminListaObras')}}" class="list-group-item list-group-item-action ">Obras</a>
                        <a href="#" class="list-group-item list-group-item-action ">Carrinhos</a>
                        <a href="#" class="list-group-item list-group-item-action ">Vendas</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
