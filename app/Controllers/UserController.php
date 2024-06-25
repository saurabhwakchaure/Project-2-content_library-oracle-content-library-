<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function userhome()
    {
        return view('User/userhome');
    }

    /*public function cloudinfra()
    {
        
        return view('User/cloudinfra');
    }*/

    //cloudapplication
    public function cloudapplication()
    {
        helper('filesystem');
        $model = new \App\Models\CloudApplicationModel();
        $Model = model('CloudApplicationModel');
        $data['detail']=$model->findAll();
        return view('User/cloudapplication',$data);
        return view('User/cloudapplication');
    }

    public function downloadcloudapplicationcontent($id)
    {
        helper('filesystem');
        $model = new \App\Models\CloudApplicationModel();
        $Model = model('CloudApplicationModel');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }


    //software
    public function oraclesoftware()
    {
        helper('filesystem');
        $model = new \App\Models\SoftwareModel();
        $Model = model('SoftwareModel');
        $data['detail']=$model->findAll();
        return view('User/oraclesoftware',$data);
        return view('User/oraclesoftware');
    }

    public function downloadsoftwarecontent($id)
    {
        helper('filesystem');
        $model = new \App\Models\SoftwareModel();
        $Model = model('SoftwareModel');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }


    //hardware
    public function oraclehardware()
    {
        helper('filesystem');
        $model = new \App\Models\OracleHardware();
        $Model = model('OracleHardware');
        $data['detail']=$model->findAll();
        return view('User/oraclehardware',$data);
        return view('User/oraclehardware');
    }

    public function downloadhardwarecontent($id)
    {
        helper('filesystem');
        $model = new \App\Models\OracleHardware();
        $Model = model('OracleHardware');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }


    //enterprise
    public function oraclenterprise()
    {
        helper('filesystem');
        $model = new \App\Models\OracleEnterpriseModel();
        $Model = model('OracleEnterpriseModel');
        $data['detail']=$model->findAll();
        return view('User/oraclenterprise',$data);
        return view('User/oraclenterprise');
    }

    public function downloadenterprisecontent($id)
    {
        helper('filesystem');
        $model = new \App\Models\OracleEnterpriseModel();
        $Model = model('OracleEnterpriseModel');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }

    
    //blockchain
    public function oracleblockchain()
    {
        helper('filesystem');
        $model = new \App\Models\OracleblockchainModel();
        $Model = model('OracleblockchainModel');
        $data['detail']=$model->findAll();
        return view('User/oracleblockchain',$data);
        return view('User/oracleblockchain');
    }

    public function downloadblockchaincontent($id)
    {
        helper('filesystem');
        $model = new \App\Models\OracleblockchainModel();
        $Model = model('OracleblockchainModel');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }
    

    //cloudinfra
    public function oraclecloudinfra()
    {
        helper('filesystem');
        $model = new \App\Models\CloudInfraModel();
        $Model = model('CloudInfraModel');
        $data['detail']=$model->findAll();
        return view('User/cloudinfra',$data);
        return view('User/cloudinfra');
        
    }

    public function downloadcloudinfracontent($id)
    {
        helper('filesystem');
        $model = new \App\Models\CloudInfraModel();
        $Model = model('CloudInfraModel');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }
    public function team()
    {
        return view('User/team');
    }

    public function userqueryform()
    {
        return view('User/userqueryform');
    }

    public function insertquery()
    {
        $data=[
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
            'query'=>$this->request->getVar('query'),
            
        ];

       // dd($data);
        $model = new \App\Models\QueryFormModel();
        $Model = model('QueryFormModel');
        $model->insert($data);
        return $this->response->redirect(site_url('userhome'));
    }
}
