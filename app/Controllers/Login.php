<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Login extends BaseController
{
 public function login(){
   /*$session = session();
   
        $model = new NewsModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $data = $model->where('email', $email)->first();
        
        
        
        if($data)
        {
          $pass = $data['password'];
           $verify_pass = password_verify($password , $pass);
            if($verify_pass){
               $ses_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'password' => $data['password']];

                $session->set($ses_data);
                return view('templates/header')
             		.view('news/nav');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                 return view('templates/header')
             		.view('news/create');
            }

        }
        else{
           $session->setFlashdata('msg', 'Email does not exist.');
            return view('templates/header')
             . view('news/create');
    }
}*/
$session = session();
$model = new NewsModel();
        $result=$model->where('email',$this->request->getVar('email'))->first();
        

        if($result!=null)
        {
            if($result['password']==$this->request->getVar('password'))
            {
                 return view('templates/header')
             		.view('news/nav');
               
            }
            else{
            $session->setFlashdata('msg', 'Password is incorrect.');
              return view('templates/header')
             		.view('news/create');
                
            }
        }
        else{
        $session->setFlashdata('msg', 'Email does not exist.');
           return view('templates/header')
             . view('news/create');
            
        }
    }}
