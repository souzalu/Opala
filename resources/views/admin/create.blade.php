@extends('layout.base')

@section('principal')



    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4">Cadastrar Produtos</h1>
        <form method="post" action="/produto" enctype="multipart/form-data">
            {{-- @crsf --}}
            @method('post')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-row text-center">
                <div class="form-group col-md-6 offset-md-3">
                    <label for="nomeProduto">Nome do Produto </label>
                    <input type="text" name="nomeProduto" class="form-control" id="nomeProduto" value="" required>
                </div>

                <div class="form-group col-md-3 offset-sm-3">
                    <label for="valorProduto">Valor do produto</label>
                    <input type="float" name="valor_unitario" class="form-control" id="valor_unitario" value="" required>
                </div>

                <div class="form-group col-md-3 offset-sm-0">
                    <label for="estoqueProduto">Estoque disponível</label>
                    <input type="text" name="estoque" class="form-control" id="estoque" value="" required>
                </div>

                <div class="form-group col-md-3 offset-sm-3">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" id="categoria" name="categoria">
                        <option>Selecione</option>
                        @foreach ($categorias as $c)

                            <option value="{{ $c->id }}">{{ $c->nome }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3 offset-sm-0">
                    <label for="exampleFormControlSelect1">Tamanho</label>
                    <select class="form-control" id="exampleFormControlSelect1 ">
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
                    <label for="descricaoProduto">Descrição</label>
                    <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" rows="3"
                        value=""></textarea>
                </div>

                <div class="form-group col-md-6 offset-md-3" class="custom-file">
                    <input type="file" name="caminhoDaImagem" class="custom-file-input mt-2 mb-5" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
                    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-md-4">
                    <a class="btn btn-dark btn-lg btn-block" href="{{route('store')}}" type="submit">Cadastrar Produto</a>
                </div>
            </div>
        </form>
    </div>


@endsection
