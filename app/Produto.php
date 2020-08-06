<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // adicionando relacionamento de 1:n com Categoria
    public function categoria()
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
        return $this->belongsToMany('App\Pedido');
    }

    // adicionando relacionamento de n:m com Favorito
    public function favoritos()
    {
        return $this->belongsToMany('App\Favorito');
    }
}
