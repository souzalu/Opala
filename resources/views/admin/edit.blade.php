@extends('layout.base')

@section('principal')


<h1 class="text-center mt-5 mb-5">Lista de Produtos</h1>


<div class="col-8 m-auto">

    <table class="table text-center">
        <thead class="thead-light">
          <tr>
            <th scope="col">Id</th>
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
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a href="">
                    <button class="btn btn-dark">Visualizar</button>
                </a>

                <a href="">
                    <button class="btn btn-primary">Editar</button>
                </a>

                <a href="">
                    <button class="btn btn-danger">Deletar</button>
                </a>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a href="">
                    <button class="btn btn-dark">Visualizar</button>
                </a>

                <a href="">
                    <button class="btn btn-primary">Editar</button>
                </a>

                <a href="">
                    <button class="btn btn-danger">Deletar</button>
                </a>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a href="">
                    <button class="btn btn-dark">Visualizar</button>
                </a>

                <a href="">
                    <button class="btn btn-primary">Editar</button>
                </a>

                <a href="">
                    <button class="btn btn-danger">Deletar</button>
                </a>
          </tr>
        </tbody>
      </table>
      <div class="alighn-left mt-5 mb-5">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

</div>



















@endsection
