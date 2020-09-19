@extends('layout.base')

@section('principal')

    <div class="home">
        <!--Começo do carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('./img/slide01.png')}}" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('./img/slide2.png')}}" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('./img/slide3.png')}}" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <!--final do carousel-->

        <!--Começo do jumbotron-->

        <div class="jumbotron jumbotron-fluid bg-dark mt-2" style="padding-top: 10px; padding-bottom: 10px;">
            <div class="container ">
                <h1 class="text-center text-white">Conheça a Opala</h1>
                <h6 class="lead text-center text-white">Acessórios clássicos, modernos e inspiradores.</h6>
            </div>
        </div>
        <!--Final do jumbotron-->

        <!--Começo do Card -->
        <div class="container">

            <div class="card-deck">
                <div class="card">
                    <a href="{{ route('produto') }}"><img class="card-img-top" src="{{url('./img/anel.jpg')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="{{ route('produto') }}" class="text-dark">
                            <h4 class="card-title text-center">Anéis</h4>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="{{ route('produto') }}"><img class="card-img-top" src="{{url('./img/colar.jpg')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="{{ route('produto') }}" class="text-dark">
                            <h4 class="card-title text-center">Colares</h4>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="{{ route('produto') }}"><img class="card-img-top" src="{{url('./img/pulseira.jpg')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="{{ route('produto') }}" class="text-dark">
                            <h4 class="card-title text-center">Pulseiras</h4>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="{{ route('produto') }}"><img class="card-img-top" src="{{url('./img/brinco.jpg')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="{{ route('produto') }}" class="text-dark">
                            <h4 class="card-title text-center">Brincos</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Final do Card -->

        <!-- Começo slide destaque -->
        <div class="container  mt-5">
            <h2 class="text-center text-dark bg-light mb-4">Produtos em Destaque</h2>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100" src="{{url('./img/anel2.jpg')}}"
                                        alt="First slide">
                                    <h6 class="text-center">Anel Feminino Dourado</h6>
                                </a>
                            </div>
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100"
                                        src="{{url('./img/pulseira2.jpg')}}" alt="First slide">
                                    <h6 class="text-center">Pulseira Feminina Prateada</h6>
                                </a>
                            </div>
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100"
                                        src="{{url('./img/pulseira3.jpg')}}" alt="First slide">
                                    <h6 class="text-center">Pulseira Couro Masculina</h6>
                                </a>
                            </div>
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100"
                                        src="{{url('./img/pulseira1.jpg')}}" alt="First slide">
                                    <h6 class="text-center">Pulseira Feminina Dourada</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100"
                                        src="{{url('./img/colar11.jpg')}}" alt="First slide">
                                    <h6 class="text-center">Colar Feminino Dourado</h6>
                                </a>
                            </div>
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100" src="{{url('./img/colar2.jpg')}}"
                                        alt="First slide">
                                    <h6 class="text-center">Colar Masculino Dourado</h6>
                                </a>
                            </div>
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100" src="{{url('./img/anel3.jpg')}}"
                                        alt="First slide">
                                    <h6 class="text-center">Anel Masculino Prateado</h6>
                                </a>
                            </div>
                            <div class="col-3"><a href="{{ route('produto') }}" class="text-dark"><img class="d-block w-100" src="{{url('./img/anel2.jpg')}}"
                                        alt="First slide">
                                    <h6 class="text-center">Anel Feminino Dourado</h6>
                                </a>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><!-- Final slide destaque -->
        </div>
        <!-- Final slide destaque -->
        <hr>
    </div>

@endsection
