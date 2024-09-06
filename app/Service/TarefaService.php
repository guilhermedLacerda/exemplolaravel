<?php

namespace App\service;

use App\Models\Tarefa;

class TarefaService{
    public function create ($tarefa){
        $dados = Tarefa::create([
            'titulo' => $tarefa['titulo'],
            'descricao' => $tarefa['descricao'],
            'status' => 'em aberto',
        ]);
        return $dados;
    }

}