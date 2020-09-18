@extends('layout.admin')

@section('conteudo')


    <div class="container">

        <h3 class="text-center mb-5">Lista de Usuários</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Perfil</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>
    </div>

    </div>
@endsection
