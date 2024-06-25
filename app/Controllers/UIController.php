<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UIController extends BaseController
{
    public function home()
    {
        return view('Dashboard/home');
    }

    public function about()
    {
        return view('Dashboard/about');
    }

    public function contact()
    {
        return view('Dashboard/contact');
    }

    public function service()
    {
        return view('Dashboard/service');
    }

    public function insertsubscribe()
    {
        $data=[
            'email'=>$this->request->getVar('email'),
        ];

       // dd($data);
        $model = new \App\Models\SubscribeModel();
        $Model = model('SubscribeModel');
        $model->insert($data);
        return $this->response->redirect(site_url('home'));
    }

    public function insertcontact()
    {
        $data=[
            'user_name'=>$this->request->getVar('user_name'),
            'phone_no'=>$this->request->getVar('phone_no'),
            'service'=>$this->request->getVar('service'),
            'email'=>$this->request->getVar('email'),
        ];

       // dd($data);
        $model = new \App\Models\ContactModel();
        $Model = model('ContactModel');
        $model->insert($data);
        return $this->response->redirect(site_url('home'));
    }


}
