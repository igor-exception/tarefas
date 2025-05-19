<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        //pegar todas as tasks, baseadas no login
        $taskModel = new TaskModel();
        $userId = session()->get('user_id');
        
        $tasks = $taskModel->where('user_id', $userId)->findAll();

        return view('tasks', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task_create');
    }

    public function store()
    {
        if(!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $taskModel = new TaskModel();

        $data = [
            'user_id' => session()->get('user_id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        $taskModel->insert($data);

        return redirect()->to('/tasks')->with('message', 'Tarefa criada com sucesso!');
    }

}
