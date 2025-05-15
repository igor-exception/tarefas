<?php

namespace App\Controllers;

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function create()
    {
        $userModel = new UserModel();

        $data = [
            'username' => 'igor2',
            'email'    => 'igor2@example.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ];

        $userModel->insert($data);

        return "Usuário inserido com sucesso!";
    }

    public function form()
    {
        return view('user_form');
    }

    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $userModel->insert($data);

        return redirect()->to('/user/form')->with('message', 'Usuário cadastrado com sucesso!');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/tarefas');
        }

        return redirect()->to('/login')->with('error', 'Email ou senha inválidos.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('message'. 'Você saiu com sucesso');
    }

    public function painel()
    {
        return view('painel');
    }
}
