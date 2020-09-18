@extends('layout.admin')

@section('conteudo')




  <div class="container">
    <div class="card-deck">
        <div class="card mt-5 mb-5">
            <a href="{{ route('index') }}" class="produto-img d-block text-center mt-5">
                <img class="img-fluid" src="https://img.icons8.com/ios-filled/200/000000/jewelry.png"/>
            </a>
          <div class="card-body">
            <h5 class="card-title text-center">Produtos</h5>
          </div>
        </div>
        <div class="card mt-5 mb-5">
            <a href="#" class="produto-img d-block text-center mt-5">
                <img class="img-fluid" src="https://img.icons8.com/windows/200/000000/users-settings.png"/>
            </a>
          <div class="card-body">
            <h5 class="card-title text-center">Usuários</h5>
          </div>
        </div>
        <div class="card mt-5 mb-5">
            <a href="{{ route('home') }}" class="produto-img d-block text-center mt-5">
                <img class="img-fluid" src="https://img.icons8.com/windows/200/000000/silver-ring.png" />
            </a>
          <div class="card-body">
            <h5 class="card-title text-center">Site Opala</h5>
          </div>
        </div>
      </div>
</div>
@endsection
