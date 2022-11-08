<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'users'  => $model->getNews()
            
        ];

        return //view ( 'abc' );
        view('templates/header', $data)
             . view('news/overview');
            //. view('templates/footer');
    }

    // ...
    public function view($password = null)
    {
        $model = model(NewsModel::class);

        $data['users'] = $model->getNews($password);

        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $password);
        }

        $data['email'] = $data['users']['email'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }
    public function create()
    {
        $model = model(NewsModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'cpassword'  => 'matches[password]'
        ])) {
            $model->save([
                'email' => $this->request->getPost('email'),
                'password'  => url_title($this->request->getPost('password'), '-', true),
                'cpassword'  => $this->request->getPost('cpassword'),
            ]);

            return view('news/success');
        }

        return view('templates/header', ['title' => 'Register'])
        . view('news/success');
           // . view('news/create');
            //. view('templates/footer');
    }

}
