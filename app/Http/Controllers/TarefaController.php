<?php

namespace App\Http\Controllers;

use App\service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    protected $tarefaService;

    public function __construct(TarefaService $tarefaService)
    {
        $this->tarefaService = $tarefaService;
    }

    public function store (Request $request){
        $tarefa = $this->tarefaService->create($request->all());
        return response()->json($tarefa);
    }

    public function findbyid ($id){
        $tarefa = $this->tarefaService->findbyid($id);
        return response()->json($tarefa);
    }

    public function index(){
        $tarefas = $this->tarefaService->getAll();
        return response()->json($tarefas);
    }

}

