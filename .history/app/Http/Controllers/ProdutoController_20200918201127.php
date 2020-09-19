<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produto;
use App\Categoria;
use Gate;

class ProdutoController extends Controller
{

    public function image($imagem)
    {
        $caminho = "Cimagem/imagem"; // buscar imagem onde foi salvo
        $arquivo = Storage::get($caminho);
        $type = Storage::mimeType($caminho); //tipo de arquivo ex: png, ou seja, qual formato

        return response($arquivo, 200)->header('Content-Type', $type); //indicando para o navegador uma resposta do tipo do arquivo com o status 200
    }


    public function create()
    {
        $categorias = Categoria::all();

        return view('admin.produtos.create', compact('categorias'));
    }


    public function store(Request $request)
    {
        if ($request->hasFile('imagem') && $request->imagem->isValid()) {
            $url = $request->imagem->store('Cimagem');
        }

        $produto = new Produto($request->all());
        $produto->url_img = $url;
        if ($produto->save()) {
            return redirect('admin/produtos/show');
        }

        return redirect()->back();
    }

    //mostra todos os produtos
    public function index()
    {
        return view('admin.produtos.show')->with('produtos', Produto::paginate(5));
    }

    public function createCategorias()
    {
        return view('admin.produtos.createCategorias');
    }

    public function storeCategorias()
    {
        $categorias = new Categoria;
        $categorias->nome = request('categoria');
        $categorias->save();

        return view('admin.produtos.createCategorias');
    }

    public function produto()
    {
        $produtos = Produto::all();
        return view('produto', compact('produtos'));
    }

    public function produtodetalhe()
    {
        return view('produtodetalhe');
    }

    // mostra produto em detalhe
    public function show($id)
    {
        $produto = Produto::find($id);
        return ($produto);

    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $produto = Produto::find($id);

        return view('admin.produtos.edit', compact('produto', 'categorias'));
    }

    public function update($id, Request $request)
    {

        $produto = Produto::find($id);
        $produto->nome = request('nome');
        $produto->valor = request('valor');
        $produto->descrição = request('descrição');
        $produto->estoque = request('estoque');
        $produto->categoria_id = request('categoria_id');

        $produto->save();
        return redirect()->route('index')->with('success', ' Alterado com sucesso');
    }

    public function destroy($id)
    {
        $categorias = Categoria::all();
        if (!$produto = Produto::find($id));

        $produto->delete();
        return redirect()->route('index');
    }
}
