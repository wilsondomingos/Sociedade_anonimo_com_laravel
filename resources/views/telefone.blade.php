@extends('layout.app7', ["current" => "home"])

@section('body')
@auth
<div class="conteudo mb-5 mt-5">
    <div class="principal">

        <div class="d-flex justify-content-center">

            <form action="telefone/store" method="POST"  class="col-12">
             @csrf
            <div class="d-flex justify-content-center">
            <h1 class="mt-5 mb-3">Informações do artista</h1>
            </div>
                <div class="d-flex justify-content-center ">
                    <div class="col-md-4 mb-3 mb-5  mt-5">
                        <label for="telefone">Telefones</label>
                        <input type="number" name="telefone" id="telefone" class="form-control " placeholder="informe o seu Telefone">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 mt-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>

            @endauth
            @guest
            <div class="container">
                <h4>Você não está logado</h4>
            </div>
            @endguest

            @endsection
