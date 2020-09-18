<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function cadastro(){

        return view ('cadastro');
    }


    public function empresa(){

        return view ('/admin/index');
    }

    public function show(){

        $users = User::all();
        return view ('/admin/usershow', compact('users'));
    }
}
