<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    //adicionando os campos fillable
    protected $fillable = ['nome', 'valor', 'descrição', 'estoque','categoria_id'];


    // adicionando relacionamento de 1:n com Categoria
    public function categorias()
    {
        return $this->belongsTo('App\Categoria');
    }

    // adicionando relacionamento de 1:n com Produto
    public function imagemProdutos()
    {
        return $this->hasMany('App\ImagemProduto');
    }

    // adicionando relacionamento de n:m com Pedido
    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedidos_produtos');
    }

    // adicionando relacionamento de n:m com Favorito
    public function favoritos()
    {
        return $this->belongsToMany('App\Favorito');
    }
}
