<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    private $detail=" ";
    public function __construct() {
        helper(['url', 'form']);
        $this->session = \Config\Services::session();
    }

    public function loginpage()
    {
        return view('Login_credentials/login');
    }

    public function registerpage()
    {
        return view('Login_credentials/register');
    }

    public function insert_into_register()
    {
        $data=[
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'repassword'=>$this->request->getVar('repassword'),
        ];

       // dd($data);
        $model = new \App\Models\RegisterModel();
        $Model = model('RegisterModel');
        $model->insert($data);
        return $this->response->redirect(site_url('login'));
    }

    public function checklogincredentials()
    {
       
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password'); 
        $model = new \App\Models\CheckLoginModel();
        $username_exists = $model->checkIfExists($username,$password);
        
        if($username_exists)
        {
            ?>
            <script> alert("login successful")</script>
            
            <?php
            $this->session->set([
                'username' => $username,
                'isLoggedIn' => true
            ]);

            $this->session->set([
                'password' => $password,
                'isLoggedIn' => true
            ]);

            $printusername=$this->session->get('username');
            $printpassword=$this->session->get('password');
            
            //echo $printusername;
            //echo $printpassword;
            $data['detail'] = [$printusername, $printpassword];
            return view('User/userhome',$data);
        }
        else
        {
            ?>
            <script> alert("username or password not found plz register properly")</script>
            <?php 
             $this->session->setFlashdata('error', 'Invalid login credentials');
            return view('Login_credentials/register');
        }
    }

    public function logout()
    { 
        echo "logout";
        $this->session->destroy();
        return $this->response->redirect(site_url('home'));

    }
}
