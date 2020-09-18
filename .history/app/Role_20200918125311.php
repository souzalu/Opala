<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     //Adicionando relacionamento n:n com User
     public function user()
     {
         return $this->belongsToMany('App\User');

     }

}
