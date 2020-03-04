@extends('layouts.app')

@section('content')
<div class="container">
 <h1>Todos Usuários</h1>
    <hr>
    <table class="table table-hover ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome do usuário</th>
            <th scope="col">E-mail do usuário</th>

          </tr>
        </thead>
        @foreach ($usuario as $use)
        <tbody>
          <tr>
            <th scope="row">{{$use->id}}</th>
            <td>{{$use->name}}</td>
            <td>{{$use->email}}</td>
           
          </tr>

        </tbody>
         @endforeach
      </table>
      <a href="{{asset('admin')}}" class="btn btn-sm btn-outline-secondary ">Voltar ao painel</a>
</div>
@endsection
