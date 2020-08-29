<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //adicionando os campos fillable
    protected $fillable = ['user_id'];


    // adicionando relacionamento de n:m com Produto
    public function produtos()
    {
        return $this->belongsToMany('App\Produto', 'pedidos_produtos');
    }

    // adicionando relacionamento de n:m com User
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
