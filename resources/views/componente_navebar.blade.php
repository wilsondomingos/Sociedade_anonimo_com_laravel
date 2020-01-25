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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <header class="responsive">
        <div class=" container log  ">
            <div class="logo col-lg-3  sm-ml-0-mr-0">
                <h1>
                    <img src="./img/logo_preto.png" width="210px" alt="">
                </h1>
            </div>

            <div class="enter d-flex flex-row-reverse col-lg-8  ">

                <li>
                    <a class="icons" href="{{ asset('carrinho') }}">
                        <img class="icons" src="img/icons/shopping.svg" alt="bolca">
                    </a>
                </li>


                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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


    <nav class="  navbar navbar-expand-lg navbar-light menu-bar linque">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="  collapse navbar-collapse " id="navbarNavDropdown">
            <ul class=" container navbar-nav">

                <li class=" nav-item dropdown mr-4">
                    <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <a href="{{ asset('index') }}">
                            <img src="./img/home-24px.svg" alt=""> </a>
                    </a>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pinturas
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('pinturas') }}">TODOS</a>
                        <a class="dropdown-item" href="#">FINE ART</a>
                        <a class="dropdown-item" href="#">MODERNA</a>
                        <a class="dropdown-item" href="#">ABSTRATA</a>
                        <a class="dropdown-item" href="#">POR ART</a>
                        <a class="dropdown-item" href="#">STREET ART</a>
                    </div>
                </li>

                <li class="nav-item dropdown mr-4">
                    <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Fotografias
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('fotografias') }}">TODOS</a>
                        <a class="dropdown-item" href="#">FINE ART</a>
                        <a class="dropdown-item" href="#">MODERNA</a>
                        <a class="dropdown-item" href="#">ABSTRATA</a>
                        <a class="dropdown-item" href="#">CONCEITUAL</a>
                        <a class="dropdown-item" href="#">RETRATO</a>
                    </div>
                </li>

                <li class="nav-item dropdown mr-4">
                    <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Desenho
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('desenhos') }}">TODOS</a>
                        <a class="dropdown-item" href="#">FINE ART</a>
                        <a class="dropdown-item" href="#">MODERNA</a>
                        <a class="dropdown-item" href="#">ABSTRATA</a>
                        <a class="dropdown-item" href="#">GRAFITTI</a>
                        <a class="dropdown-item" href="#">ILUSTRACAO DIGITAL</a>
                    </div>
                </li>

                <li class="nav-item dropdown mr-4">
                    <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Prints
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('prints') }}">TODOS</a>
                        <a class="dropdown-item" href="#">COLAGEM</a>
                        <a class="dropdown-item" href="#">MODERNA</a>
                        <a class="dropdown-item" href="#">ABSTRATA</a>
                        <a class="dropdown-item" href="#">GRAFITTI</a>
                        <a class="dropdown-item" href="#">ILUSTRACAO DIGITAL</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-dark " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        HQ
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('hq') }}">TODOS</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Esculturas
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('escultura') }}">TODOS</a>
                        <a class="dropdown-item" href="#">FINE ART</a>
                        <a class="dropdown-item" href="#">MODERNA</a>
                        <a class="dropdown-item" href="#">ABSTRATA</a>
                        <a class="dropdown-item" href="#">MINIMALISTA</a>
                        <a class="dropdown-item" href="#">FIGURATIVA</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-1">
                    <a class="nav-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Outros
                    </a>
                    <div class="dropdown-menu btn-light mt-3">
                        <a class="dropdown-item" href="{{ asset('arquitetura') }}">ARQUITETURA</a>
                    </div>
            </ul>
        </div>
    </nav>





    </div>
    </div>

</body>

</html>
