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


        return view('admin.usershow')->with('users', User::paginate(10));

        // $users = User::paginate(5);
        // return view ('/admin/usershow', compact('users'));
    }
}
