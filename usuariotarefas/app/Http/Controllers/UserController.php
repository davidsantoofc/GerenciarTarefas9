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

    public function show(User $user){
        dd($user->tarefas);
    }
}
