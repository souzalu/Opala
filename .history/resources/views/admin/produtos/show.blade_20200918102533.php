@extends('layout.admin')

@section('conteudo')

    <div class="container">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

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

                        <form action="{{route('produtos_destroy',$produto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <a href="destroy/{{($produto->id)}}">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                        </form>
                        </td>
                    </tr>


                @endforeach
            </tbody>
        </table>
        {{ $produtos->links() }}
    </div>
    @endsection


















