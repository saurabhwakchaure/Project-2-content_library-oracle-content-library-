<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DemoController extends BaseController
{
    private $detail=" ";
    public function form()
    {
        return view('Demo/demoform');
    }

    public function upload()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\DemoPdfModel();
        $Model = model('DemoPdfModel');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
    }

    public function download($id)
    {
        helper('filesystem');
        $model = new \App\Models\DemoPdfModel();
        $Model = model('DemoPdfModel');
        $file = $Model->find($id);
        $response = $this->response
        ->setStatusCode(200)
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'inline; filename="' . $file['file_name'] . '"');
        return $response->setBody($file['file_data']);
    }

    public function cloudinfra()
    {
        helper('filesystem');
        $model = new \App\Models\DemoPdfModel();
        $Model = model('DemoPdfModel');
        $data['detail']=$model->findAll();
        return view('User/cloudinfra',$data);
        return view('User/cloudinfra');
        

    }


}
