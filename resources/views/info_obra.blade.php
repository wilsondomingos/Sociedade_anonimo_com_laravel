@extends('layout.app6', ["current" => "home"])

@section('body')

@auth





<div class="conteudo mb-5 mt-5">


    <div class="principal">
        <div class="d-flex justify-content-center">
            <form action="info_obra/store" method="POST" enctype="multipart/form-data" class="col-12">
                @csrf
                <h1 class="mt-5 mb-3">Informações da obra</h1>
                <div class="form-group">
                    <label for="autor">Autor</label>
                      <select class="form-control mb-2" name="user_id"id="user_id">
                    <option value="{{ auth::user()->id}}">{{ auth::user()->name}}</option>
                     </select>
                    </div>

            <div class="form-group">
              <label for="autor">Categorias</label>
            <select class="form-control mb-1" name="categoria_id"id="categoria_id">
                @foreach($Cat as $c)
                <option value="{{ $c['id'] }}">{{ $c['categoria']}}</option>
                @endforeach
            </select>
                </div>

                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" name="preco" class="form-control " placeholder="informe o preço da obra">
                </div>
                 <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" name="quantidade" class="form-control " placeholder="informe a quantidade ">
                </div>

                <div class="form-group">
                    <label for="obra">Nome da obra</label>
                    <input type="text" name="obra" class="form-control " placeholder="informe o nome da obra">
                </div>

                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="data">Data da criação</label>
                        <input type="date" name="data" class="form-control ">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tamanho">Tamanho da obra</label>
                        <input type="number" name="tamanho" class="form-control "
                            placeholder="informe o tamanho da obra">
                    </div>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagem"  id="imagem" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>

                <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição da obra</label>
                <textarea class="form-control" name="descricao"id="descricao" rows="3"></textarea>
                </div>

        <div class="col-md-4 mt-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

        </form>
    </div>


    @endauth
    @guest
    <div class="container">
        <h4>Você não está logado</h4>
    </div>
    @endguest
    @endsection
