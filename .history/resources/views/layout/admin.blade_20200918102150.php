<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://icons8.com.br/">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('./css/style.css') }}">
    <title>Base</title>
</head>

<body>



<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="https://img.icons8.com/offices/32/000000/silver-ring.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Opala
    </a>

    <ul class="nav  align-self-center">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item text-center ">
                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Entrar') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item text-center dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </nav>
{{-- Começo do conteúdo principal --}}
@yield('conteudo')
{{-- Final do conteúdo principal --}}
