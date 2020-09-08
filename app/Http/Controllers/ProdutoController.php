<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{

    //só pode ver a imagem quem estiver logado no sistema
    // public function __construct()
    // {
    //     $this->middleware('auth');

    // }

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
        return view('admin.produtos.show')->with('produtos', Produto::all());
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

    // mostra produto em detalhe
    public function show($id)
    {
        $produto = Produto::find($id);
        return ($produto);
        // return view('/admin/produtos', compact('produto'));
    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $produto = Produto::find($id);

        return view('admin.produtos.edit', compact('produto', 'categorias'));
    }


    public function destroy($id)
    {
        $categorias = Categoria::all();
        if(!$produto = Produto::find($id));
        //  return redirect()->back();

         $produto->delete();


         return redirect()->route('index');

        // dd("deletando o produto $id");
    }
}
