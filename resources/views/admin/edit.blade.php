@extends('layout.base')

@section('principal')


    <h1 class="text-center mt-5 mb-5">Lista de Produtos</h1>


    <div class="col-10 m-auto">
        {{ $produtos }}



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
                @foreach ($produtos as $p)
                    {{-- {{dd ($p->imagemProdutos[0]->caminhoDaImagem)}} --}}
                <tr>
                <th scope="row">{{$p->id}}</th>
                    <td>

                            @if (isset($p->imagemProdutos[0]->caminhoDaImagem))
                            <img src="{{asset($p->imagemProdutos[0]->caminhoDaImagem)}}" alt="">

                            @else
                            <img src="{{($p->caminhoDaImagem)}}" alt="">

                            @endif

                    </td>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->valor}}</td>
                    <td>{{$p->estoque}}</td>
                    <td>{{$p->categoria_id}}</td>
                    <td>{{$p->descrição}}</td>
                    <td>

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                </tr>

                @endforeach

            </tbody>
        </table>

        <div class="col-6 mt-5 mb-5">
            <a href="{{ route('create') }}">
                <button class="btn btn-success">Cadastrar Produto</button>
            </a>
        </div>
        <div class="col-6 mt-3 mb-5">
            <a href="{{ route('categorias') }}">
                <button class="btn btn-success">Cadastrar Categoria</button>
            </a>
        </div>

    </div>



















@endsection
