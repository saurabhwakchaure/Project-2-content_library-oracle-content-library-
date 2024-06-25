<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function home()
    {
        return view('Admin/home');
    }

    //cloudinfra
    public function addcloudinfrastructure()
    {
        return view('Admin/addcloudinfrastructure');
    }

    public function insertcloudinfrastructure()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\CloudInfraModel();
        $Model = model('CloudInfraModel');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
        return $this->response->redirect(site_url('adminhome'));

    }

    //cloudapplication
    public function addcloudapplication()
    {
        return view('Admin/addcloudapplication');
    }
    
    public function insertcloudapplication()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\CloudApplicationModel();
        $Model = model('CloudApplicationModel');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
        return $this->response->redirect(site_url('adminhome'));

    }

    //software
    public function addsoftware()
    {
        return view('Admin/addsoftware');
    }
    
    public function insertsoftware()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\SoftwareModel();
        $Model = model('SoftwareModel');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
        return $this->response->redirect(site_url('adminhome'));

    }

    //hardware
    public function addhardware()
    {
        return view('Admin/addhardware');
    }
    
    public function inserthardware()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\OracleHardware();
        $Model = model('OracleHardware');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
        return $this->response->redirect(site_url('adminhome'));

    }

    //enterprise
    public function addenterprise()
    {
        return view('Admin/addenterprise');
    }
    
    public function insertenterprise()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\OracleEnterpriseModel();
        $Model = model('OracleEnterpriseModel');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
        return $this->response->redirect(site_url('adminhome'));

    }

    //blockchain
    public function addblockchain()
    {
        return view('Admin/addblockchain');
    }
    
    public function insertblockchain()
    {
        helper(['form', 'url']);
       
        $file = $this->request->getFile('pdfFile');
        $filename=$this->request->getVar('file_name');
        $desc=$this->request->getVar('description');
        $fileData = file_get_contents($file->getTempName());
        $model = new \App\Models\OracleblockchainModel();
        $Model = model('OracleblockchainModel');
        $model->insert([
                    'file_name' => $filename,
                    'desc' =>$desc,
                    'file_data' => $fileData,
                    'created_at' => date('Y-m-d H:i:s'),
        ]);    
        return $this->response->redirect(site_url('adminhome'));

    }

    //repair
    public function repair()
    {
        return view('Admin/repair');
    }

    //contact
    //viewcontactform
    public function viewcontactform()
    {
        $model = new \App\Models\ContactModel();
        $Model = model('ContactModel');
        $data['detail']=$model->findAll();
        return view('Admin/viewcontactform',$data);
        return view('Admin/viewcontactform');
    }
    //deleteContact
    public function deleteContact($id)
    {
      $model = new \App\Models\ContactModel();
      $Model = model('ContactModel');
       if($model->find($id))
       {
          $model->delete($id);
       } 
       return $this->response->redirect(site_url('viewcontactform'));
    }
    //printContact
    public function printContact($id)
    {
        $model = new \App\Models\ContactModel();
        $Model = model('ContactModel');
        $data['detail']=$model->find($id);
        ?>
        <diV class="container mt-5">
        <table border=1 class="table table-striped table-hover bg-white table-responsive-sm">
            <thead class="bg-dark">
                <tr>
                    <th>id</th>
                    <th>user_name</th>
                    <th>phone_no</th>
                    <th>service</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
               
              
             
      <?php        
       foreach($data as $demo)
       {
                      echo "<tr>";
                      echo "<td>".$demo['id']."</td>";
                      echo "<td>".$demo['user_name']."</td>";
                      echo "<td>".$demo['phone_no']."</td>";
                      echo "<td>".$demo['service']."</td>";
                      echo "<td>".$demo['email']."</td>";
                      
       }
       ?>
       <script>window.print()</script>
       
         </tbody>
        </table>
  
    </diV>
       
    <?php
    }

    //Query
    //viewqueryform
    public function viewqueryform()
    {
        $model = new \App\Models\QueryFormModel();
        $Model = model('QueryFormModel');
        $data['detail']=$model->findAll();
        return view('Admin/viewqueryform',$data);
        return view('Admin/viewqueryform');
    }
    //deletequery
    public function deleteQuery($id)
    {
      $model = new \App\Models\QueryFormModel();
      $Model = model('QueryFormModel');
       if($model->find($id))
       {
          $model->delete($id);
       } 
       return $this->response->redirect(site_url('viewqueryform'));
    }
    
    //printQuery
    public function printQuery($id)
    {
        $model = new \App\Models\QueryFormModel();
        $Model = model('QueryFormModel');
        $data['detail']=$model->find($id);
        ?>
        <diV class="container mt-5">
        <table border=1 class="table table-striped table-hover bg-white table-responsive-sm">
            <thead class="bg-dark">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Query</th>
                </tr>
            </thead>
            <tbody>
               
              
             
      <?php        
       foreach($data as $demo)
       {
                      echo "<tr>";
                      echo "<td>".$demo['id']."</td>";
                      echo "<td>".$demo['name']."</td>";
                      echo "<td>".$demo['email']."</td>";
                      echo "<td>".$demo['query']."</td>";
                      
       }
       ?>
       <script>window.print()</script>
       
         </tbody>
        </table>
  
    </diV>
       
    <?php
    }

    //subscribe
    public function viewsubscribe()
    {
        $model = new \App\Models\SubscribeModel();
        $Model = model('SubscribeModel');
        $data['detail']=$model->findAll();
        return view('Admin/viewsubscribe',$data);
        return view('Admin/viewsubscribe');
    }

    //developer
    public function developer()
    {
        return view('Admin/developer');
    }

    

}
