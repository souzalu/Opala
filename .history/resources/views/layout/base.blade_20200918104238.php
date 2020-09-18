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
    <!-- Header área mensagem-->
    <div class=" nav navbar-static-top text-black py-1 bg-light ">
        <div class=" container-fluid  text-center">
            Se possível fique em casa, entregamos com toda a segurança.
        </div>
    </div>
    <!-- Final Header área mensagem-->

    <!-- Header logo e icones de acesso-->
    <div class="container">
        <div class="row justify-content-between mt-3">
            <div class="col align-self-center">

                <a href="#">
                    <img src="https://img.icons8.com/office/25/000000/whatsapp.png" />
                </a>
                <a href="#">
                    <img src="https://img.icons8.com/fluent/25/000000/facebook-new.png" />
                </a>
            </div>
            <div class="col text-center ">
                <a href="{{ route('home') }}">
                    <img class="text-center" src="https://img.icons8.com/windows/50/000000/silver-ring.png" />
                </a>
                <div class="login">Opala Acessórios</div>
            </div>


                <ul class="nav text-center align-self-center">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item text-center ">
                            <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Registrar') }}</a>
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

                <div class="col align-self-center">
                    <a href="{{ route('pagamento') }}">
                        <img src="https://img.icons8.com/windows/32/000000/shopping-cart.png" />
                    </a>
                </div>


        </div>
    </div>
    <!-- Final Header logo e icones de acesso-->

    <!-- navbar menu começo-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mr-4">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link text-white dropdown-toggle" class="@yield('activeprod')"
                            href="{{ route('produto') }}" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Produtos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('produto') }}">Pulseiras</a>
                            <a class="dropdown-item" href="{{ route('produto') }}">Brincos</a>
                            <a class="dropdown-item" href="{{ route('produto') }}">Colares</a>
                            <a class="dropdown-item" href="{{ route('produto') }}">Anéis</a>
                        </div>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link text-white" class="@yield('activeSob')" href="#">Sobre</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link text-white" class="@yield('activeCont')" href="#">Contato</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Ok</button>
                </form>
            </div>
        </div>
    </nav>
    </div>
    <!-- Final Navbar menu -->

    {{-- Começo do conteúdo principal --}}
    @yield('principal')
    {{-- Final do conteúdo principal --}}




    <!-- Footer começo -->
    <footer class="footer bg-light">
        <div class="header bg-dark">
            <div class="container">
                <div class="row py-2 d-flex align-items-center">

                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0 text-white">
                        <h6 class="mb-0">Conecte-se conosco através das redes sociais!</h6>
                    </div>


                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a href="#" class="face-icone mr-4">
                            <img src="https://img.icons8.com/fluent/24/000000/facebook-new.png">
                        </a>

                        <a href="#" class="zap-icone mr-4">
                            <img src="https://img.icons8.com/offices/24/000000/whatsapp.png">
                        </a>

                        <a href="#" class="inst-icone mr-4">
                            <img src="https://img.icons8.com/fluent/24/000000/instagram-new.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container text-center text-md-left mt-2">
            <div class="row dark-grey-text">
                <div class="col-md-3 col-lg-4 col-xl-3 ">
                    <h3 class="text-capitalize"><strong>Opala Acessórios</strong></h3>
                    <p class="text-justify">Para acompanhar as atualizações do mercado, identificamos
                        que nosso público seria melhor atendido por meio de uma plataforma digital. Foi aí então que
                        nasceu o site www.opala.com.br. </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto ">
                    <h6 class="text-uppercase mt-2 mb-2">Institucional</h6>
                    <p><a class="text-dark" href="#">Políticas</a></p>
                    <p><a class="text-dark" href="#">Sobre Nós</a></p>
                    <p><a class="text-dark" href="#">Trocas e Devoluções</a></p>
                    <p><a class="text-dark" href="#">Dúvidas Freguentes</a></p>
                </div>


                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase mt-2 mb-2">Links Úteis</h6>
                    <p><a class="text-dark" href="#">Minha Conta</a></p>
                    <p><a class="text-dark" href="#">Meus Pedidos</a></p>
                    <p><a class="text-dark" href="#">Rastrear Pedidos</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase mt-2 mb-2">Entre em Contato</h6>
                    <p><i class="fas fa-home"></i> Rua Azul, 123 SP</p>
                    <p><i class="fas fa-envelope"></i> opala@opala.com</p>
                    <p><i class="fas fa-phone"></i> 11 5999 9999</p>
                    <p><i class="fas fa-print"></i> 11 96444 4444</p>
                </div>
            </div>
            <footer class="text-center">Copyright 2020</footer>
        </div>
        <!-- Final Footer -->


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
</body>

</html>
{{--
<!-- <a href="<https://api.whatsapp.com/send?phone=+5511964116559">"{{ route('zap') }}"-->
--}}

