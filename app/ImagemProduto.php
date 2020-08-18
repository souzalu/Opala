<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemProduto extends Model
{
    protected $fillable = ['caminhoDaImagem', 'produto_id'];

    // adicionando relacionamento de 1:n com Produto
    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }
}
