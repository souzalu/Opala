@extends('layout.admin')

@section('conteudo')



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


  <div class="container">
    <div class="card-deck">
        <div class="card mt-5 mb-5">
            <a href="{{ route('index') }}" class="produto-img d-block text-center mt-5">
                <img class="img-fluid" src="https://img.icons8.com/ios-filled/200/000000/jewelry.png"/>
            </a>
          <div class="card-body">
            <h5 class="card-title text-center">Produtos</h5>
          </div>
        </div>
        <div class="card mt-5 mb-5">
            <a href="#" class="produto-img d-block text-center mt-5">
                <img class="img-fluid" src="https://img.icons8.com/windows/200/000000/users-settings.png"/>
            </a>
          <div class="card-body">
            <h5 class="card-title text-center">Usuários</h5>
          </div>
        </div>
        <div class="card mt-5 mb-5">
            <a href="#" class="produto-img d-block text-center mt-5">
                <img src="https://img.icons8.com/windows/200/000000/silver-ring.png" />
            </a>
          <div class="card-body">
            <h5 class="card-title text-center">Site Opala</h5>
          </div>
        </div>
      </div>
</div>
@endsection
