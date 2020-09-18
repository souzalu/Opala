<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate;

class UserController extends Controller
{
    public function cadastro(){

        return view ('cadastro');
    }


    public function empresa(){

        if(Gate::denies('empresa-view')){
            return redirect('/home');
        };
        // return view ('/admin/index');
    }

    public function show(){
        if(Gate::denies('empresa-view')){
            return redirect('/home');
        };

        $users = User::paginate(8);
        // $roles = Role::all();
        return view ('/admin/usershow', compact('users'));
    }
}
