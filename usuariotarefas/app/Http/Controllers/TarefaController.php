<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    //
    public function create(){
        return view('tarefa.create');
    }

    public function store(Request $request){
        $tarefa = new Tarefa();
        $tarefa->user_id = $request->id_user;
        $tarefa->nome = $request->nome;
        $tarefa->descricao = $request->descricao;
        $tarefa->prazo = $request->prazo;
        $tarefa->prioridade = $request->prioridade;

        if($request->concluida == null)
            $tarefa->concluida = 'Não';
        else 
            $tarefa->concluida = $request->concluida;
        $tarefa->save();
        return redirect()->route('users.show', ['id' => $request->id_user]);
            
    }
}
