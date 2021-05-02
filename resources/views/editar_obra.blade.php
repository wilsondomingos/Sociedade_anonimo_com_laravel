@extends('layout.app6', ["current" => "home"])

@section('body')

@auth

<div class="conteudo mb-5 mt-5">


    <div class="principal mb-5">
        <div class="d-flex justify-content-center mb-5">
            <form action="/info_obra/update{{$ob->id}}" method="POST"  enctype="multipart/form-data" class="col-12">
                 @csrf
                 @method("PATCH")
                <h1 class="mt-5 mb-3">Informações da obra</h1>
                <div class="form-group">
                    <label for="autor">Autor</label>
                      <select class="form-control mb-2" name="user_id"id="user_id">
                    <option value="{{ auth::user()->id}}">{{ auth::user()->name}}</option>
                     </select>
                    </div>
                    <div class="form-group">
              <label for="autor">Estilo</label>
            <select class="form-control mb-1" name="estilo_id"id="estilo_id">
                @foreach($Estilo as $c)
                <option value="{{ $c['id'] }}">{{ $c['estilo']}}</option>
                @endforeach
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
                    <input type="number" name="preco" value="{{$ob->valor}}" class="form-control {{$errors->has('preco') ? 'is-invalid' : ''}}" placeholder="informe o preço da obra">
                      @if ($errors->has('preco'))
                    <div class="invalid-feedback">
                        {{$errors->first('preco')}}
                    </div>
                 @endif
                </div>
                 <div class="form-group">
                    <input type="hidden" name="quantidade" value="{{$ob->quantidade}}" class="form-control {{$errors->has('quantidade') ? 'is-invalid' : ''}}" placeholder="informe a quantidade ">
                      @if ($errors->has('quantidade'))
                    <div class="invalid-feedback">
                        {{$errors->first('quantidade')}}
                    </div>
                 @endif
                </div>

                <div class="form-group">
                    <label for="obra">Nome da obra</label>
                    <input type="text" name="obra" value="{{$ob->nome_da_obra}}" class="form-control {{$errors->has('obra') ? 'is-invalid' : ''}} " placeholder="informe o nome da obra">
                      @if ($errors->has('obra'))
                    <div class="invalid-feedback">
                        {{$errors->first('obra')}}
                    </div>
                 @endif
                </div>

                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="data">Data da criação</label>
                        <input type="date" name="data" value="{{$ob->criacao}}" class="form-control {{$errors->has('data') ? 'is-invalid' : ''}}">
                          @if ($errors->has('data'))
                    <div class="invalid-feedback">
                        {{$errors->first('data')}}
                    </div>
                 @endif
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tamanho">Tamanho da obra</label>
                        <input type="text" name="tamanho"value="{{$ob->tamanho}}" class="form-control {{$errors->has('tamanho') ? 'is-invalid' : ''}}"
                            placeholder="informe o tamanho da obra">
                                  @if ($errors->has('tamanho'))
                    <div class="invalid-feedback">
                        {{$errors->first('tamanho')}}
                    </div>
                 @endif
                    </div>
                </div>

                <div class="custom-file mb-4">

                   <input type="file" class="custom-file-input  {{$errors->has('imagem') ? 'is-invalid' : ''}}" name="imagem"  id="imagem" lang="es">

                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        @if ($errors->has('imagem'))
                    <div class="invalid-feedback">
                        {{$errors->first('imagem')}}
                    </div>
                 @endif
                </div>

                <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição da obra</label>
                <input type="text" name="descricao"value="{{$ob->descricao}}" class="form-control {{$errors->has('descricao') ? 'is-invalid' : ''}}"

                     @if ($errors->has('descricao'))
                    <div class="invalid-feedback">
                        {{$errors->first('descricao')}}
                    </div>
                 @endif
                </div>

        <div class="col-md-4 mt-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
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
