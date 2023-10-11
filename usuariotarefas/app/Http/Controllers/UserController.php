<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        //dd($users);

        return view('user.index')->with('users', $users);
    }

    public function show($id){
        //dd($user->tarefas);
        $user = User::find($id);
        $tarefas = $user->tarefas;
        return view('tarefa.show')->with('tarefas', $tarefas);
    }
}
