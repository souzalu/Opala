<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// rotas dos produtos
Route::get('admin/produtos/create', 'ProdutoController@create')->name('create');
Route::get('admin/produtos/createCategorias', 'ProdutoController@createCategorias')->name('categorias');
Route::get('/admin/produtos/show', 'ProdutoController@index')->name('index'); //mostra todos os produtos cadastrados
Route::get('/storage/Cimagem/{imagem}', 'ProdutoController@image');
Route::get('/admin/produtos/edit{id}', 'ProdutoController@edit')->name('edit');
Route::get('/admin/produtos/{id}','ProdutoController@show');

Route::post('/produto/store','ProdutoController@store')->name('store');//salva os produtos no banco
Route::post('/createCategorias','ProdutoController@storeCategorias')->name('storeCategorias');//salva os produtos no banco




//rotas do site
Route::get('/site', 'HomeController@home')->name('site');
Route::get('/cadastro', 'UserController@cadastro')->name('cadastro');
Route::get('/login', 'UserController@login')->name('login');
Route::get('/pagamento', 'CarrinhoController@pagamento')->name('pagamento');
Route::get('/produto', 'ProdutoController@produto')->name('produto');
Route::get('/produtodetalhe', 'ProdutoController@produto')->name('produto_detalhe');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

