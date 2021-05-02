<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Factura</title>
</head>
<body>
<div class="acimaheader">

</div>
    <header class="responsive ">
        <div class="logo col-lg-3  sm-ml-0-mr-0">
            <h1>
                <h6 class="text-white ">Sociedade an{}nimo</h6>
            </h1>
        </div>
        <div >

            <h6>Cliente {{auth::user()->name}}</h6>
             <hr>
         </div>
    </header>
 </div>
</div>

 <div class="">
 <h4>Dados do comprador</h4>
    <table class="table ">
        <thead >
            <hr>

          <tr>
            <th >Comprador</th>
             <th >Compl</th>
            <th >Rua</th>


            <th >CPF</th>
            <th>Valor</th>
            <th >Quantidade</th>
            <th >Número</th>

          </tr>
        </thead>
       @foreach ($vendas as $venda)
        <tbody>
          <tr>
          <th scope="row"></th>
          <td>{{$venda->nome_comprador .'|'}}</td>
          <td>{{$venda->comp .'|'}}</td>
            <td>{{$venda->rua .'|'}}</td>


             <td>{{$venda->cpf .'|'}}</td>

              <td>{{$venda->valor .'|'}}</td>
              <td>{{$venda->quantidade .'|'}}</td>
              <td>{{$venda->numero .'|'}}</td>

          </tr>
        </tbody>
         @endforeach
      </table>


<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--->

     <h4>Dados da obra</h4>
      <table class="table ">
        <thead >
            <hr>

          <tr>
            <th >Nome da Obra</th>
             <th >Valor</th>
            <th >Criação</th>
            <th >Tamanho</th>

          </tr>
        </thead>
       @foreach ($obras as $ob)
       @foreach ($Obra_vendidas as $ov)
       @foreach ($vendas as $venda)
      @if($venda->user_id==$ov->user_id && $ov->obra_id ==$ob->id)
        <tbody>
          <tr>
          <th scope="row"></th>
          <td>{{$ob->nome_da_obra .'|'}}</td>
          <td>{{$ob->valor .'|'}}</td>
          <td>{{$ob->criacao .'|'}}</td>
          <td>{{$ob->tamanho .'|'}}</td>
          </tr>
        </tbody>
        @endif
         @endforeach
         @endforeach
         @endforeach
      </table>
 </div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
