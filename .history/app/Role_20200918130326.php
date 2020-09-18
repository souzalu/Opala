<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     //Adicionando relacionamento n:n com User
     public function users()
     {
         return $this->belongsToMany('App\User', 'roles_users');

     }

}
