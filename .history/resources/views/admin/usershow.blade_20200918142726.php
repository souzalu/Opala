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
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
