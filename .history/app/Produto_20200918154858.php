<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    //adicionando os campos fillable
    protected $fillable = ['nome', 'valor', 'descrição', 'estoque','categoria_id','url_img'];


    // //formando valor para Real
    public function getValorAttribute($valor)
    {
            return 'R$' . number_format($valor, 2,',','.');
    }

   // mutator está tirando o nome da pasta do arquivo - limpeza
    public function getUrl_imgAttribute($valor)
    {
            $explode = explode('/', $valor);
            $nomeArquivo = $explode[1];

            return $nomeArquivo;
    }


    // adicionando relacionamento de 1:n com Categoria
    public function categorias()
    {
        return $this->belongsTo('App\Categoria');
    }


    // adicionando relacionamento de n:n com Pedido
    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedidos_produtos');
    }


    // adicionando relacionamento de n:n com Favorito
    public function favoritos()
    {
        return $this->belongsToMany('App\Favorito');
    }
}
