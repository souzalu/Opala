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

        return view ('/admin/usershow');
    }
}
