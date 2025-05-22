<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel;
use App\Models\UserModel;

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

    public function edit($id=null)
    {
        if(!session()->has('isLoggedIn')){
            return redirect()->to('/login');
        }
        $taskModel = new TaskModel();
        $task = $taskModel->find($id);

        if($task == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Tarefa não existe");
        }

        if ($task['user_id'] != session()->get('user_id')) {
            return redirect()->to('/tasks')->with('error', 'Acesso negado.');
        }
        
        return view('task_edit', ['task' => $task]);
    }

    public function update()
    {
        if(!session()->has('isLoggedIn')){
            return redirect()->to('/login');
        }

        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');

        $taskModel = new TaskModel();
        $task = $taskModel->find($id);

        if($task == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Tarefa não existe");
        }        

        if($task['user_id'] != session()->get('user_id')) {
            return redirect()->to('/tasks')->with('error', 'Acesso negado.');
        }

        $updated = $taskModel->update($id, ['title' => $title, 'description' => $description]);
        if(!$updated) {
            return redirect()->to("/task/edit/$id")->with('error', 'Erro ao atualizar tarefa.');
        }
        return redirect()->to('/tasks')->with('message', 'Tarefa atualizada com sucesso!');
    }

}
