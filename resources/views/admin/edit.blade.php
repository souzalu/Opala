@extends('layout.base')

@section('principal')


    <h1 class="text-center mt-5 mb-5">Lista de Produtos</h1>


    <div class="col-8 m-auto">

        <table class="table text-center">
            <thead class="thead-light">
                <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor Unitário</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                       <a href="#"> <img src="https://via.placeholder.com/80x80" alt=""></a>
                    </td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <a href="#"> <img src="https://via.placeholder.com/80x80" alt=""></a>
                    </td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <a href="#"> <img src="https://via.placeholder.com/80x80" alt=""></a>
                    </td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                </tr>
            </tbody>
        </table>

            <div class="col-6 mt-5 mb-5">
                <a href="{{route('create')}}">
                    <button class="btn btn-success">Cadastrar Produto</button>
                </a>
            </div>
            <div class="col-6 mt-3 mb-5">
                <a href="{{route('categorias')}}">
                    <button class="btn btn-success">Cadastrar Categoria</button>
                </a>
            </div>

    </div>



















@endsection
