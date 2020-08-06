<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // adicionando relacionamento de n:m com Produto
    public function produtos()
    {
        return $this->belongsToMany('App\Produto');
    }

    // adicionando relacionamento de n:m com User
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
