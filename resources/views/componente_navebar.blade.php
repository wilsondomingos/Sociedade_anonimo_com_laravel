
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="acimaheader">

</div>
    <header class="responsive ">
        <div class=" container log head ">

            <div class="logo col-lg-3  sm-ml-0-mr-0">
                <h1>
                    <h2 class="text-white ">Sociedade an{}nimo</h2>
                </h1>
            </div>

            <div class="enter d-flex flex-row-reverse col-lg-8  ">
                 <h6 class="text-danger"><strong> <?php  ?></strong></h6>
                <li>

                    <a class="icons" href="{{ asset('carrinho') }}">

                        <img class="icons" src="img/icons/carro.png"  alt="bolca">

                    </a>
                </li>


                @guest
                <li class="nav-item">
                   <strong> <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ asset('perfil_user') }}">Perfil usuario

                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('sair') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                @endguest



            </div>

        </div>




    </header>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  " id="navbarNav">
    <ul class="navbar-nav container">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{ asset('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ asset('pinturas') }}">Pinturas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ asset('fotografias') }}">Fotografias</a>
      </li>
        </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ asset('desenhos') }}">Desenhos</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark" href="{{ asset('prints') }}">Prints</a>
      </li>
        <li class="nav-item">
       <a class="nav-link text-dark" href="{{ asset('hq') }}">HQ - Quadradinhos</a>
      </li>
        <li class="nav-item">
       <a class="nav-link text-dark" href="{{ asset('escultura') }}">Esculturas</a>
      </li>
       <li class="nav-item">
       <a class="nav-link text-dark" href="{{ asset('arquitetura') }}">Arquitetura</a>
      </li>
    </ul>
  </div>
</nav>

    <script src="{{asset('js/javasscript.js')}}"></script>
</body>


</html>
