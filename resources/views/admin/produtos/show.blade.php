@extends('layout.base')

@section('principal')

    <div class="container">

        <h1 class="text-center mt-5 mb-5">Lista de Produtos</h1>

        <div class="row">

            <div class="col-md-4 mr-auto ml-auto mt-5 mb-5 ">
                <a href="{{ route('create') }}">
                    <button class="btn btn-success">Cadastrar Produto</button>
                </a>
            </div>

            <div class="col-md-4 mt-5 mb-5">
                <a href="{{ route('categorias') }}">
                    <button class="btn btn-success">Cadastrar Categoria</button>
                </a>
            </div>
        </div>
    </div>

    <div class="col-12 m-auto">
        {{-- {{ $produtos }} --}}



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
                @foreach ($produtos as $produto)
                    <tr>
                        <th scope="row">{{$produto->id}}</th>

                        <td>

                            <img src="{{url("storage/{$produto->url_img}")}}" alt="{{$produto->nome}}" style="max-width:100px;">
                        </td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->estoque }}</td>
                        <td>{{ $produto->categoria_id }}</td>
                        <td>{{ $produto->descrição }}</td>
                        <td>
                            <a href="edit/{{($produto->id)}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
                {{-- @foreach ($produtos as $p)
                    {{-- {{ dd($p->imagemProdutos[0]->caminhoDaImagem) }}
                    <th scope="row">{{ $p->id }}</th>
                    <td>

                        @if (isset($p->imagemProdutos[0]->caminhoDaImagem))
                            <img src="{{ asset($p->imagemProdutos[0]->caminhoDaImagem) }}" alt="">

                            @else
                            <img src="{{ $p->caminhoDaImagem }}" alt="">

                        @endif --}}




                        {{--
                @endforeach --}}

























