<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produto;
use App\Categoria;
use App\ImagemProduto;

class ProdutoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');

    }

    public function image($caminhoDaImagem)
    {
        $caminho = "produtos_img/$caminhoDaImagem";
        $arquivo = Storage::get($caminho); //binário do arquivo
        $type = Storage::mimeType($caminho); // tipo de imagem jpeg, png

        //indicamos ao navegador uma resposta do tipo do arquivo com o status 200

        return response($arquivo, 200)
            ->header('Content-Type', $type);
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('admin.create', compact('categorias'));
    }


    public function store(Request $request)
    {
        if ($request->hasFile('imagem')&& $request->imagem->isValid()){
           $caminhoDaImagem = $request->imagem->store('produtos_img');
        }

            $produto = new Produto($request->all());

            $produto->caminhoDaImagem=$caminhoDaImagem;

            if($produto->save()){
                return redirect()->back();
            }

            return redirect()->back();


    }

    public function edit()
    {

        return view('admin.edit');
    }

    public function createCategorias()
    {

        return view('admin.createCategorias');
    }

    public function storeCategorias(){

             $categorias = new Categoria;
             $categorias->nome = request('categoria');
             $categorias->save();

             dd($categorias);



         }

         public function produto()
         {

             return view('produto');
         }

         public function produtodetalhe()
         {

             return view('produtodetalhe');
         }

}


 // public function store()
    // {
    //     $produto = new Produto;
    //     $produto->nome = request('nomeProduto');
    //     $produto->valor = request('valor_unitario');
    //     $produto->estoque = request('estoque');
    //     $produto->descrição = request('descricaoProduto');
    //     $produto->categoria_id = request('categoria');


    //     $produto->save();

    //     dd($produto);
    // }




    //$input = $request->all();
        //$input = $request->input('nomeProduto');


    // public function createCategorias(){

    //     $categorias = Categoria::all();

    //     return view('admin.createCategorias', compact('categorias'));

    // }
    //
