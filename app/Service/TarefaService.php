<?php

namespace App\service;

use App\Models\Tarefa;

class TarefaService
{
    public function create($tarefa)
    {
        $dados = Tarefa::create([
            'titulo' => $tarefa['titulo'],
            'descricao' => $tarefa['descricao'],
            'status' => 'em aberto',
        ]);
        return $dados;
    }

    public function findbyid($id)
    {
        $tarefa = Tarefa::find($id);

        if ($tarefa == null) {
            return [
                'status' => false,
                'message' => 'Tarefa nao encontrada'
            ];
        }

        return [
            'status' => true,
            'message' => 'Pesquisa realizada com sucesso',
            'data' => $tarefa
        ];
    }

    public function getAll(){
        $tarefas = Tarefa::all();
        
        return [
            'status' => true,
            'message' => 'Pesquisa efeituada com sucesso',
            'data' => $tarefas
        ];
    }
}
