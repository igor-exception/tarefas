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
        helper(['form']);
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
        helper(['form']);
        return view('task_create');
    }

    public function store()
    {
        helper(['form']);
        if(!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $rules = [
            'title' => 'required|min_length[2]',
            'description' => 'max_length[255]',
        ];

        $messages = [
            'title' => [
                'required' => 'O campo Título é obrigatório',
                'min_length' => 'O campo Título deve ter no mínimo 2 caracteres',
            ],
            'description' => [
                'max_length' => 'O campo Descrição pode ter no máximo 255 caracteres'
            ],
        ];


        if(!$this->validate($rules, $messages)){
            return redirect()->to('tasks/create')
                             ->with('validation', $this->validator)
                             ->withInput();
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
        helper(['form']);
        if(!session()->has('isLoggedIn')){
            return redirect()->to('/login');
        }

        $taskModel = new TaskModel();
        $task = $taskModel
                    ->where('id', $id)
                    ->where('user_id', session()->get('user_id'))
                    ->first();

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
        helper(['form']);
        if(!session()->has('isLoggedIn')){
            return redirect()->to('/login');
        }

        $rules = [
            'title' => 'required|min_length[2]',
            'description' => 'max_length[255]',
        ];

        $messages = [
            'title' => [
                'required' => 'O campo Título é obrigatório',
                'min_length' => 'O campo Título deve ter no mínimo 2 caracteres',
            ],
            'description' => [
                'max_length' => 'O campo Descrição pode ter no máximo 255 caracteres'
            ],
        ];

        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');

        if(!$this->validate($rules, $messages)){
            return redirect()->to("task/edit/$id")
                             ->with('validation', $this->validator)
                             ->withInput();
        }

        $taskModel = new TaskModel();
        $task = $taskModel
                    ->where('id', $id)
                    ->where('user_id', session()->get('user_id'))
                    ->first();

        if(!$task) {
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

    public function delete($id = null)
    {
        if(!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $taskModel = new TaskModel();
        $task = $taskModel->find($id);

        if(session()->get('user_id') != $task['user_id']) {
            return redirect()->to('/tasks')->with('error', 'Não é possível remover tarefa que não pertence a você.');
        }

        if(!$task) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Tarefa não existe");
        }

        if(!$taskModel->delete($id)) {
            return redirect()->to('/tasks')->with('error', 'Não é possível remover tarefa.');
        }

        return redirect()->to('/tasks')->with('message', 'Tarefa removida com sucesso.');
    }

}
