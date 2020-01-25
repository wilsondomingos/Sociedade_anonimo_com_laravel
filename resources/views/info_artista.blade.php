@extends('layout.app7', ["current" => "home"])

@section('body')
@auth
<div class="conteudo mb-5 mt-5">
    <div class="principal">

        <div class="d-flex justify-content-center">
            <form action="{{asset('perfil_user')}}" method="GET" enctype="multipart/form-data" class="col-12">

                <h1 class="mt-5 mb-3">Informações do artista</h1>
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
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" class="form-control " placeholder="informe o seu cpf">
                    </div>
                </div>

                <div class="custom-file">

                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
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
