<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view ('/admin/usershow');
    }
}
