@extends('layout.app5', ["current" => "home"])

@section('body')
<div class="container conteudo mt-4">
    <aside>
      <h2>Sobre</h2>

      <div class="bloco">
        <p>em meio ao cenário de desemprego</p>
        <p>generalizado e desincentivo cultural, a plataforma nasce no brasil </p>
        <p>com o objetivo de oferecer um espaço de divulgação de</p>
        <p> e apreciação de obras de </p>
        <p>artistas independentes, além de promover também uma</p>
        <p>(possível) fonte de renda. </p>
      </div>

      <div class="bloco">
        <p>não definimos o que é arte.</p>
      </div>
      <div class="bloco">
        <p>muito menos o que é ser um artista.</p>
      </div>

      <div class="bloco">
        <p>você produz e gostaria de divulgar seu trabalho, ou</p>
        <p>se te interessa arte de alguma forma </p>
        <p>(esperamos que sim!), registre-se </p>
      </div>
      <div class="bloco">
        <p>e acompanhe nossa comunidade.</p>
      </div>
    </aside>

    <main>
      <div id="carossel" class="carousel slide m-1 " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carossel" data-slide-to="0" class="active"></li>
          <li data-target="#carossel" data-slide-to="1"></li>
          <li data-target="#carossel" data-slide-to="2"></li>
          <li data-target="#carossel" data-slide-to="3"></li>
          <li data-target="#carossel" data-slide-to="4"></li>
          <li data-target="#carossel" data-slide-to="5"></li>
          <li data-target="#carossel" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/Sobre_termos_de_serviço_poli/arquiteto-1-1024x637.jpg" class="d-block w-100" alt="fruta e leguma">
          </div>
          <div class="carousel-item">
            <img src="./img/Sobre_termos_de_serviço_poli/escultura_likenes_alex_oliver_1.jpg" class="d-block w-100" alt="suco de mirtilho">
          </div>
          <div class="carousel-item">
            <img src="./img/Sobre_termos_de_serviço_poli/green-leafed-plant-under-white-clouds-2528333.jpg" class="d-block w-100" alt="agricultor">
          </div>
          <div class="carousel-item">
            <img src="./img/Sobre_termos_de_serviço_poli/nova.jpg" class="d-block w-100" alt="agricultor">
          </div>
          <div class="carousel-item">
            <img src="./img/Sobre_termos_de_serviço_poli/paul_gauguin_1892.jpg" class="d-block w-100" alt="agricultor">
          </div>
          <div class="carousel-item">
            <img src="./img/Sobre_termos_de_serviço_poli/photo.aspx.jpg" class="d-block w-100" alt="agricultor">
          </div>
          <div class="carousel-item">
            <img src="./img/Sobre_termos_de_serviço_poli/willen_basse_1634.jpg" class="d-block w-100" alt="agricultor">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carossel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carossel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </main>
  </div>
@endsection
