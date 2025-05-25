<?php

namespace App\Controllers;

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function form()
    {
        helper(['form']);
        return view('user_form');
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'username' => 'required|min_length[4]|is_unique[users.email]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
        ];

        $messages = [
            'username' => [
                'required' => 'O campo Username é obrigatório',
                'min_length' => 'O campo Username deve ter no mínimo 4 caracteres',
                'is_unique' => 'Este username já está cadastrado.'
            ],
            'email' => [
                'required' => 'O campo Email é obrigatório',
                'valid_email' => 'O campo Email deve ser válido',
                'is_unique' => 'Este email já está cadastrado.'
            ],
            'password' => [
                'required' => 'O campo Senha é obrigatório',
                'min_length' => 'O campo Senha deve ter no mínimo 6 caracteres'
            ],
        ];

        if(!$this->validate($rules, $messages)) {
            return redirect()->to('user/form')
                             ->with('validation', $this->validator)
                             ->withInput();
        }
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
        helper(['form']);
        return view('login');
    }

    public function login()
    {
        helper(['form']);

        $rules = [
            'email' => "required|valid_email",
            'password' => "required|min_length[6]"
        ];

        $messages = [
            'email' => [
                'required' => 'O campo Email é obrigatório.',
                'valid_email' => 'Digite um email válido.'
            ],
            'password' => [
                'required' => 'O campo Senha é obrigatório.',
                'min_length' => 'A senha deve ter no mínimo 6 caracteres.'
            ]
        ];

        if(!$this->validate($rules, $messages)) {
            return redirect()->to('/login')
                             ->with('validation', $this->validator)
                             ->withInput();
        }

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
            return redirect()->to('/dashboard');
        }

        return redirect()->to('/login')
                         ->with('error', 'Email ou senha inválidos.')
                         ->withInput();
    }

    public function logout()
    {
        session()->remove(['user_id', 'username', 'isLoggedIn']);
        return redirect()->to('/login')->with('message', 'Você saiu com sucesso');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
