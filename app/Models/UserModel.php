<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];

    protected $useTimestamps = true; // Preenche created_at e updated_at automaticamente
}