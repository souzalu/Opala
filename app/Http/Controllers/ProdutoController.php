<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{

    public function produto(){

        return view ('produto');

    }

    public function produtodetalhe(){

        return view ('produtodetalhe');
    }

    public function create(){



        $categorias = Categoria::all();

        return view('admin.create', compact('categorias'));

    }

    public function store(){
       $produto = new Produto;
        $produto->nome = request('nomeProduto');
        $produto->valor = request('valor_unitario');
        $produto->estoque = request('estoque');
        $produto->descrição = request('descricaoProduto');
        $produto->categoria_id = request('categoria');
        $produto->caminhoDaImagem = request('caminhoDaImagem');

        if ($request->hasFile('caminhoDaImagem') && $request->caminhoDaImagem->isValid()){
            $imagePath = $request->caminhoDaImagem->store('produtos');
            dd('testando');

        }
        //$input = $request->all();
        //$input = $request->input('nomeProduto');

        $produto->save();

        dd($produto);

        }


        // public function createCategorias(){

        //     $categorias = Categoria::all();

        //     return view('admin.createCategorias', compact('categorias'));

        // }
        // public function storeCategorias(){

        //     $categorias = new Categoria;
        //     $categorias->nome = request('categoria');
        //     $categorias->save();

        //     dd($categorias);



        // }


        public function edit(){

            return view ('admin.edit');
        }

}
