@extends('layout.base')

@section('principal')

    <div class="container">
        <h3 class="text-center mt-4 mb-4">Criar Cadastro</h3>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <div class="card border-light">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col-12 mb-2">
                                    <input type="text" class="form-control" placeholder="Nome Completo">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="CPF">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="CEP">
                                </div>

                                <div class="col-8 mt-2">
                                    <input type="text" class="form-control" placeholder="Rua">
                                </div>
                                <div class="col-4 mt-2">
                                    <input type="text" class="form-control" placeholder="Número">
                                </div>

                                <div class="col-7 mt-2">
                                    <input type="text" class="form-control" placeholder="Bairro">
                                </div>
                                <div class="col-5 mt-2">
                                    <input type="text" class="form-control" placeholder="Complemento">
                                </div>

                                <div class="col-7 mt-2">
                                    <input type="text" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="col-5 mt-2">
                                    <input type="text" class="form-control" placeholder="Estado">
                                </div>

                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" placeholder="Telefone">
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" placeholder="Celular">
                                </div>

                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" placeholder="Confirmar E-mail">
                                </div>

                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" placeholder="Senha">
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" placeholder="Confirmar Senha">
                                </div>
                                <div class="col mt-2">
                                    <button type="button " class="btn btn-secondary btn-sm btn-block ">Confirmar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




