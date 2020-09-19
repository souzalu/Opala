@extends('layout.base')
@section('activeProd')
    active
@endsection

@section('principal')

    <div class="produto">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('./img/prod3.png') }}" alt="Primeiro Slide">
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

                @foreach ($produtos as $produto)


                    <div class="col-md-3 col-6 produtos mb-4 px-2">
                        <div class="produtos text-center mb-3">
                            <a href="#" class="produto-img d-block">
                                <img class=" mb-2" src="{{ url("storage/{$produto->url_img}") }}"
                                    alt="{{ $produto->nome }}" style="max-width:100px;">
                            </a>
                            <div class="titulo">
                                <h6>
                                    <a href="#" class="text-dark">{{ $produto->nome }}</a>
                                </h6>
                                <div class="lista-preço">
                                    <h6>
                                        <a href="#" class="text-dark">{{ $produto->valor }}</a>
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

    @endsection
