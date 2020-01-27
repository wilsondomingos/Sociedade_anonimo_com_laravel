@extends('layout.app7', ["current" => "home"])

@section('body')
@auth
<div class="conteudo mb-5 mt-5">
    <div class="principal">

        <div class="d-flex justify-content-center">
            <form action="info_artista/store" method="POST" enctype="multipart/form-data" class="col-12">
                @csrf
                <h1 class="mt-5 mb-3">Informações do artista</h1>

                 <select class="form-control mb-2" name="user_id"id="user_id">
                    <option value="{{ auth::user()->id}}">{{ auth::user()->name}}</option>
               </select>
               <select class="form-control mb-2" name="telefone_id"id="telefone_id">
                @foreach($telefone as $tel)
                    <option value="{{ $tel['id'] }}">{{ $tel['telefone']}}</option>
                @endforeach
               </select>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" class="form-control " placeholder="Informe a rua">
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" class="form-control " placeholder="informe a cidade">
                </div>




                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="inputState">Estado</label>
                         <input type="text" name="estado" class="form-control " placeholder="informe o seu Estado">

                    </div>
                    <div class="col-md-4 mb-1">
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" class="form-control " placeholder="informe o seu cpf">
                    </div>
                </div>
 <!--
                <div class="form-group">
                    <label for="imagem">Foto</label>
                    <input type="text" name="imagem" class="form-control "id="imagem" placeholder="Insira a foto">
                </div>
-->
                <div class="custom-file">

                    <input type="file" class="custom-file-input" name="imagem" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar a foto</label>
                </div>


                <div class="col-md-4 mt-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>

            @endauth
            @guest
            <div class="container">
                <h4>Você não está logado</h4>
            </div>
            @endguest

            @endsection
