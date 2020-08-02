@extends('layout.base')

@section('principal')

    <div class="pagamento">
        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: white;">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('produto')}}">Produto</a></li>
                    <li class="breadcrumb-item"><a href="{{route('produto_detalhe')}}">Detalhes Produto</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pagamento</li>
                </ol>
            </nav>



            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Produto</th>
                        <th style="width:10%">Preço</th>
                        <th style="width:8%">Quantidade</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="{{url('./img/pulseira2.png')}}" alt="Pulseira Prateada"
                                        class="img-responsive"></div>
                                <div class="col-sm-10 ml-2">
                                    <h5 class="nomargin">Pulseira Prateada Feminina</h5>
                                    <p>Pulseira de bijuteria na cor prata com detalhe em coração.</p>
                                </div>
                            </div>
                        </td>
                        <td>R$ 7,00</td>
                        <td>
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td class="text-center">R$7,00</td>
                        <td>
                            <button class="btn btn-info btn-sm"><img
                                    src="https://img.icons8.com/windows/15/000000/refresh.png" /></button>
                            <button class="btn btn-danger btn-sm"><img
                                    src="https://img.icons8.com/metro/15/000000/delete.png" /></button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                    <tr>
                        <td><a href="#"></a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="text-center"><strong>Total R$7,00</strong></td>
                        <td><a href="#"></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="container">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Pagamento</h5>
                    </div>

                    <div class="col">
                        <a href="#" class="visa-icone mr-4">
                            <img src="https://img.icons8.com/color/30/000000/visa.png" />
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="master-icone mr-4">
                            <img src="https://img.icons8.com/color/30/000000/mastercard.png" />
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="vista-icone mr-4">
                            <img src="https://img.icons8.com/cotton/30/000000/bank-card-back-side.png" />
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col mb-2">
                                            <input type="text" class="form-control" placeholder="Nome Impresso no Cartão"
                                                title="Nome impresso no cartão">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-8">
                                            <input type="text" class="form-control" placeholder="Número do Cartão"
                                                title="Número do cartão">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="MM/ANO"
                                                title="Vencimento do cartão">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-4 mt-2">
                                            <input type="text" class="form-control" placeholder="CVC"
                                                title="Código de Segurança">
                                        </div>
                                        <div class="col-4 mt-2">
                                            <input type="text" class="form-control" placeholder="Valor Frete"
                                                title="Valor do Frete">
                                        </div>
                                        <div class="col-4 mt-2">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Parcelas</option>
                                                    <option>À Vista - R$ 7,00</option>
                                                    <option>1x - R$ 7,00</option>
                                                    <option>2x - R$ 3,50</option>
                                                    <option>3x</option>
                                                    <option>4x</option>
                                                    <option>5x</option>
                                                    <option>6x</option>
                                                </select>
                                            </div>
                                        </div>



                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <a href="{{route('home')}}" class="btn btn-secondary mt-4"><i class="fa fa-angle-left"></i> Continuar
                                    Comprando</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <h2 class="h3 mb-3 text-black">Seu Pedido:</h2>
                                    <div class="p-3 p-lg-5 border">
                                        <table class="table site-block-order-table mb-5">
                                            <thead>
                                                <th>Produto</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pulseira Prateada Feminina <strong class="mx-2">x</strong> 1</td>
                                                    <td>R$ 7,00</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-black"><strong>Subtotal</strong></td>
                                                    <td class="text-black">R$ 7,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-black"><strong>Frete</strong></td>
                                                    <td class="text-black">R$ 2,50</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-black font-weight-bold"><strong>Total do Pedido</strong>
                                                    </td>
                                                    <td class="text-black font-weight-bold"><strong>R$ 9,50</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-secondary btn-block">Finalizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
