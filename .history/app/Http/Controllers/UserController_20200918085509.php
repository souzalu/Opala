<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro(){

        return view ('cadastro');
    }

    // public function login(){

    //     return view ('login');
    // }

    public function index(){

        return view ('/admin/index');
    }
}
