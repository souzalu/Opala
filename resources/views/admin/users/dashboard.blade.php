<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://icons8.com.br/">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <title>OPALA</title>

    <!-- Style CSS-->
    <link href="/css/admin.css" rel="stylesheet">

    @yield('css_role_page')

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="/">Opala ADM</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">


        </button>

        <!-- Navbar -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <img src="https://img.icons8.com/ios/20/000000/search--v1.png" />
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="https://img.icons8.com/ultraviolet/25/000000/user-shield.png" />
                    @auth
                        {{ Auth::user()->name }}
                        {{ Auth::user()->roles->isNotEmpty() ? Auth::user()->roles->first()->name : '' }}
                    @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">


        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/users">
                    <img src="https://img.icons8.com/ultraviolet/22/000000/user-female.png" />
                    <span>Usuário</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/roles">
                    <img src="https://img.icons8.com/ultraviolet/22/000000/user-male-circle.png" />
                    <span>Perfil</span></a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ route('site') }}">
                    <img src="https://img.icons8.com/offices/20/000000/silver-ring.png" />
                    <span>Opala</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                @yield('content')

            </div>


            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Opala 2020</span>
                    </div>
                </div>
            </footer>

        </div>


    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Para Sair selecione Logout</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                    <a class="btn btn-primary" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    {{-- <a class="btn btn-primary" href="login.html">Logout</a>
                    --}}
                </div>
            </div>
        </div>
    </div>


</body>

</html>
