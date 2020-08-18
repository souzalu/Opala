<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'valor','descrição','estoque','categoria_id'];



    //formatando numeros para ficar com formato de real com ponto e virgula R$ 1.125,22
    public function getValorAttribute($value)
    {
        return 'R$' . number_format($value, 2, ',', '.');
    }

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
        return $this->belongsToMany('App\Pedido');
    }

    // adicionando relacionamento de n:m com Favorito
    public function favoritos()
    {
        return $this->belongsToMany('App\Favorito');
    }
}
