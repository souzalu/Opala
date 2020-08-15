<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    // adicionando relacionamento de 1:n com Produto
    public function produtos()
    {
        return $this->hasMany('App\Produto');
    }

    protected $fillable=[];
};
        // protected $fillable=[
            // 'nome'];
