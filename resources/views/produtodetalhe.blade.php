@extends('layout.base')

@section('principal')

<div class="proddetalhe">
    <!--começo caminho das pagina-->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: white;">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="produto.php">Produto</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalhes Produto</li>
            </ol>
        </nav>
    </div>
    <!--Final caminho das pagina-->

    <!-- Começo pagina do produto -->
    <div class="container my-5 pt-md-0 pt-5">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-md-none text-center">
                    <h2 class="titulo mb-0">Pulseira Prateada Feminina </h2>
                    <span id="lista-preço">R$ 7,00</span>
                </div>
                <div class="produto-img">
                    <div class="produto-img owl-carousel product-slider">
                        <img src="{{url('./img/pulseira2.jpg')}}" alt="pulseira prateada feminina " class="img-fluid" />
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group d-none d-md-block">
                    <h1 class=" m-0 text-left">Pulseira Prateada Feminina </h1>
                    <div class="lista-preço">
                        <span class="lista-preço" id="lista-preço">R$ 7,00</span>
                    </div>
                </div>


                <div id="codigo-sku" class="sku hidden form-group">
                    <label class="form-control-label mb-0">SKU:0123 </label>
                    <span class="sku_elem"></span>
                </div>

                <div class="form-group descrição">
                    <label class="form-control-label">Descrição:</label>
                    <p>Pulseira Prateada com desenho de coração</p>
                </div>

                <div class="form-group">
                    <label for="#" class="form-control-label">Tamanho:</label>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Escolher</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                        </select>
                    </div>

                    <div class="form-group row no-gutters">
                        <div class="col-lg-4 col-sm-5 text-center">
                            <label class="form-control-label">Quantidade</label>
                            <div class="form-group text-center">
                                <select class="form-control text-center" id="exampleFormControlSelect1">
                                    <option>Escolher</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>Digite a quantidade</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-8 col-sm-6 text-center">
                            <label class="form-control-label">Adicionar ao carrinho</label>
                            <input type="submit" id="add-to-cart" class="btn btn-adc btn-block btn-dark ml-1"
                                value="Adicionar">
                        </div>

                        <div class="col-lg-5 col-sm-6 mt-4 text-center">
                            <div class="cep text">

                                <h5>Calcular Frete e Prazo</h5>
                                <div class="input-group mb-3">
                                    <input type="tel" class="form-control" placeholder="Digite seu CEP"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Calcular</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fim pagina do produto -->

    <hr>

    <!-- Começo slide destaque -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Também pode te interessar:</h2>
            </div>
        </div>
    </div>

    <div class="container  mt-5 mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3"><a href="#" class="text-dark"><img class="d-block w-100" src="{{url('./img/colar2.jpg')}}"
                                    alt="First slide">
                                <h6 class="text-center">Colar Masculino Dourado</h6>
                            </a>
                        </div>
                        <div class="col-3"><a href="#" class="text-dark"><img class="d-block w-100" src="{{url('./img/anel.jpg')}}"
                                    alt="First slide">
                                <h6 class="text-center">Anel Feminino Dourado</h6>
                            </a>
                        </div>
                        <div class="col-3"><a href="#" class="text-dark"><img class="d-block w-100" src="{{url('./img/pulseira3.jpg')}}"
                                    alt="First slide">
                                <h6 class="text-center">Pulseira Couro Masculina</h6>
                            </a>
                        </div>
                        <div class="col-3"><a href="#" class="text-dark"><img class="d-block w-100" src="{{url('./img/pulseira1.jpg')}}"
                                    alt="First slide">
                                <h6 class="text-center">Pulseira Feminina Dourada</h6>
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
        </div>
    </div>
    <!-- Fim slide destaque -->
</div>
@endsection
