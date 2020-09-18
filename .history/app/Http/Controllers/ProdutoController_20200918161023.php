<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produto;
use App\Categoria;
use Gate;

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
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };

        $categorias = Categoria::all();

        return view('admin.produtos.create', compact('categorias'));
    }


    public function store(Request $request)
    {
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };

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
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };
        return view('admin.produtos.show')->with('produtos', Produto::paginate(5));
    }

    public function createCategorias()
    {
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };
        return view('admin.produtos.createCategorias');
    }

    public function storeCategorias()
    {
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };
        $categorias = new Categoria;
        $categorias->nome = request('categoria');
        $categorias->save();

        dd($categorias); //incluir return
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
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };
        $produto = Produto::find($id);
        return ($produto);
        // return view('/admin/produtos', compact('produto'));
    }

    public function edit($id)
    {
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };
        $categorias = Categoria::all();
        $produto = Produto::find($id);

        return view('admin.produtos.edit', compact('produto', 'categorias'));
    }

    public function update($id, Request $request)
    {
        if (Gate::denies('empresa-view')) {
            return redirect('/home');
        };
        $produto = Produto::find($id);
        // $produto->update($request->all());
        $produto->nome = request('nome');
        $produto->valor = request('valor');
        $produto->descrição = request('descrição');
        $produto->estoque = request('estoque');
        $produto->categria_id = request('categoria_id');

        // $produto->valor = str_replace('R$', '', $produto->valor);
        // $produto->valor = str_replace(',', '.', $produto->valor);

        // $produto->valor = floatval($produto->valor);
        // dd($produto->valor);
        $produto->save();


        return redirect()->route('index')->with('success', ' Alterado com sucesso');
    }



    public function destroy($id)
    {
        $categorias = Categoria::all();
        if (!$produto = Produto::find($id));
        //  return redirect()->back();

        $produto->delete();
        return redirect()->route('index'); //->with(['message'=> 'Deletado com Sucesso!!'])


    }
}
