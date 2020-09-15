@extends('admin.users.dashboard')

@section('content')

<h1>Criar Novo usuário</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/users" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Nome de Usuário</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Nome..." value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Senha..." required minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar Senha</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Repetir Senha..." id="password_confirmation">
    </div>
    <div class="form-group">
        <label for="role">Selecionar Perfil</label>

        <select class="role form-control" name="role" id="role">
            <option value="">Selecionar Perfil...</option>
            @foreach ($roles as $role)
            <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
</form>
@endsection
