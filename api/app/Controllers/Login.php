<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{

    public function index()
    {
        $db =  new LoginModel();

        $post = $this->request->getPost();
        if (!empty($post)) {
            $user = $post["user"];
            $password = $post["password"];

            $mensagem = [
                'mensagem' => 'Bem vindo',
                'tipo' => 'alert-success',
            ];
            if ($db->exists($user, $password)) {
                $query=$db->exists($user, $password);
                $this->session->set('usuario',$query);
                $this->session->set('logado',true);
                $this->session->set('user', $user);
                $mensagem['mensagem'] = 'Bem vindo '.$_SESSION['usuario']['user']->nome.'!';
                $this->session->setFlashdata('mensagem', $mensagem);
                return redirect()->to(base_url('/public'));
            } else {
                $mensagem['mensagem'] = 'Usuário ou senha !';
                $mensagem['tipo'] = 'alert-danger';                
            }
            $this->session->setFlashdata('mensagem', $mensagem);
        }

        echo view('formularios/formLoguin');
    }

    public function recuperarSenha()
    {
        // $post = $this->request->getPost();
        // if (!empty($post)) {
        //     $email = \Config\Services::email();
        //     $email->setFrom('guifoxlokaum@gmail.com', 'Guilherme');
        //     $email->setTo($post['email']);

        //     $email->setSubject('Email Test');
        //     $email->setMessage('sua nova senha.');
        //     $email->send(false);
        //     // if($email->send()){
        //     //     echo 'email enviado';
        //     // }else{
        //     //     echo 'falho';
        //     // }
        // }

        echo view('formularios/formRecuperaSenha');
    }

    public function logout(){
         session()->destroy();

         return redirect()->to(base_url('public/login'));
    }

    public function settings(){
      
        echo view('layout/settings');
    }

    public function editSenha(){
        $post = $this->request->getPost();
        if (!empty($post)) {
            $db =  new LoginModel();
            $mensagem=$db->resetPassword($_SESSION['usuario']['user']->user,$post['oldPassword'],$post['newPassword'],$post['confirmPassword']);
            $this->session->setFlashdata('mensagem', $mensagem);
        }

        echo view('layout/editPassword');
    }

    public function editEmail(){
        $post = $this->request->getPost();
        if (!empty($post)) {
            $db =  new LoginModel();
            $mensagem=$db->resetEmail($_SESSION['usuario']['user']->user,$post['password'],$post['newEmail'],$post['confirmEmail']);
            $this->session->setFlashdata('mensagem', $mensagem);
        }
        echo view('layout/editEmail');
    }

    public function editNome(){
        $post = $this->request->getPost();
        if (!empty($post)) {
            $db =  new LoginModel();
            $mensagem=$db->resetName($_SESSION['usuario']['user']->user,$post['password'],$post['Pnome'],$post['Snome']);
            $this->session->setFlashdata('mensagem', $mensagem);
        }
        
        echo view('layout/EditNome');
    }
}
