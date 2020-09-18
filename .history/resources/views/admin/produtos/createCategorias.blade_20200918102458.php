@extends('layout.admin')

@section('conteudo')



    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4">Cadastrar Categorias</h1>
        <form method="post" action="/createCategorias">
            {{-- @crsf --}}
            @method('post')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-row text-center mt-5">
                <div class="form-group col-md-6 offset-md-3">
                    <label for="categoria">Nome da Categoria </label>
                    <input type="text" name="categoria" class="form-control" id="categoria" value="" required>
                </div>
            </div>

            <div class="form-row justify-content-center mt-5 ">
                <div class="col-md-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>


@endsection
