@extends('layout.base')

@section('principal')



    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4">Cadastrar Produtos</h1>
        <form method="POST" action="/produto/store" enctype="multipart/form-data">
            {{-- @crsf  --}}
            @method('post')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-row text-center">
                <div class="form-group col-md-6 offset-md-3">
                    <label for="nome">Nome do Produto </label>
                    <input type="text" name="nome" class="form-control" id="nome" value="" required>
                </div>

                <div class="form-group col-md-3 offset-sm-3">
                    <label for="valor">Valor do produto</label>
                    <input type="float" name="valor" class="form-control" id="valor" value="" required>
                </div>

                <div class="form-group col-md-3 offset-sm-0">
                    <label for="estoque">Estoque disponível</label>
                    <input type="text" name="estoque" class="form-control" id="estoque" value="" required>
                </div>

                <div class="form-group col-md-3 offset-sm-3">
                    <label for="categoria_id">Categoria</label>
                    <select class="form-control" id="categoria_id" name="categoria_id">
                        <option>Selecione</option>
                        @foreach ($categorias as $c)

                            <option value="{{ $c->id }}">{{ $c->nome }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3 offset-sm-0">
                    <label for="tamanho">Tamanho</label>
                    <select class="form-control" name="tamanho" id="tamanho">
                        <option>Selecione</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                    </select>
                </div>

                <div class="form-group col-md-6 offset-md-3">
                    <label for="descrição">Descrição</label>
                    <textarea class="form-control" name="descrição" id="descrição" rows="3"
                        value=""></textarea>
                </div>
            </div>

            <div class="form-group text-center " >
                <div class=" col-md-6 offset-md-3 ">
                    <label for="imagem">Inserir uma imagem do produto</label>
                    <input type="file" name="imagem" class="form-control-file" id="imagem" >
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-md-4 mt-2">
                    <button class="btn btn-dark btn-lg btn-block" href="{{ route('create') }}" type="submit">Cadastrar Produto</button>
                </div>
            </div>

        </form>





    </div>


@endsection
