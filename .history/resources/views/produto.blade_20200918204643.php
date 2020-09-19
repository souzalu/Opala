@extends('layout.base')
@section('activeProd')
    active
@endsection

@section('principal')

    <div class="produto">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('./img/prod3.png')}}" alt="Primeiro Slide">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: white;">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produto</li>
                    </ol>
                </nav>

                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preferência</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Escolher...</option>
                        <option value="1">Mais Vendido</option>
                        <option value="2">De A a Z</option>
                        <option value="3">Menor Preço</option>
                        <option value="3">Categoria</option>
                    </select>
                </form>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row mb-md-5 mb-4 mx-n2">

                @foreach($produtos as $produto)


                <div class="col-md-3 col-6 produtos mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{ url("storage/{$produto->url_img}") }}" alt="{{ $produto->nome }}">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">{{$produto->nome}}</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">{{$produto->valor}}</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-3 col-6 produtos mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/pulseira.jpg')}}" alt="pulseira dourada">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Pulseira Dourada Feminina</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 5,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 produtos mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/colar.jpg')}}" alt="colar dourado">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Colar Dourado Feminino</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 6,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 produtos mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/pulseira2.jpg')}}" alt="pulseira prateada">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Pulseira Prateada Feminina</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 7,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-3 col-6 produtos mt-5 mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/pulseira3.jpg')}}" alt="pulseira couro">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Pulseira Couro Masculina</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 6,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 produtos mt-5 mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/colar2.jpg')}}" alt="colar dourado">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Colar Dourado Masculino</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 7,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 produtos mt-5 mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/anel3.jpg')}}" alt="anel prateado">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Anel Caveira Prateado</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 5,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-6 produtos mt-5 mb-4 px-2">
                    <img class="btn btn-default" title="Favorito" src="https://img.icons8.com/ios/15/000000/like.png">
                    <div class="produtos text-center mb-3">
                        <a href="#" class="produto-img d-block">
                            <img class="img-fluid  mb-2" src="{{url('./img/anel1.jpeg')}}" alt="anel dourado">
                        </a>
                        <div class="titulo">
                            <h5>
                                <a href="#" class="text-dark">Anel Dourado Feminino</a>
                            </h5>
                            <div class="lista-preço">
                                <h6>
                                    <a href="#" class="text-dark">R$ 3,00</a>
                                </h6>
                                <img class="btn btn-default" title="Aumenta itens"
                                    src="https://img.icons8.com/ios/15/000000/plus.png">
                                <img class="btn btn-default" title=""
                                    src="https://img.icons8.com/ios/20/000000/shopping-cart-with-money.png">
                                <img class="btn btn-default" title="Diminui itens"
                                    src="https://img.icons8.com/ios/15/000000/minus.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Navegação de página exemplo">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="produto.php" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="produto.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="produto.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="produto.php">Próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
