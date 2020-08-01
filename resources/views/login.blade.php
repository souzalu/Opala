@extends('layout.base')

@section('principal')

    <div class="row mt-4 justify-content-center">
        <aside class="col-sm-4">
            <div class="card mt-4 mb-5">
                <article class="card-body">
                    <a href="#" class="float-right btn btn-outline-dark">Cadastrar</a>
                    <h4 class="card-title mb-4 mt-1">Entrar</h4>
                    <form>
                        <div class="form-group">
                            <input name="" class="form-control" placeholder="Digite seu e-mail" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="******" type="password">
                        </div>
                    </form>
                    <hr>
                    <p>
                        <a href="" class="btn btn-block btn-outline-danger"> <i class="fab fa-google"></i> Entrar com
                            Google</a>
                        <a href="" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i> Entrar
                            com Facebook</a>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-block"> Entrar </button>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="small" href="#">Esqueceu a senha</a>
                        </div>
                    </div>
                </article>
            </div>
        </aside>
    </div>
    
@endsection
