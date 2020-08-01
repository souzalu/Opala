<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
    Route::get('/', function () {
        return view('welcome');
    });
|
*/


/* rota empresa */

Route::get('/home', 'HomeController@home')->name('home');

/* rota produto */

Route::get('/produto', 'ProdutoController@produto')->name('produto');
Route::get('/produtodetalhe', 'ProdutoController@produto')->name('produto_detalhe');


/* rota cadastro */

Route::get('/cadastro', 'UserController@cadastro')->name('cadastro');
Route::get('/login', 'UserController@login')->name('login');

/* rota carrinho */

Route::get('/pagamento', 'CarrinhoController@pagamento')->name('pagamento');


