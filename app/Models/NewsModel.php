<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'users';
   

    protected $allowedFields = ['email', 'password', 'cpassword'];
    public function getNews($password = false)
    {
        if ($password === false) {
            return $this->findAll();
        }

        return $this->where(['password' => $password])->first();
    }
}
