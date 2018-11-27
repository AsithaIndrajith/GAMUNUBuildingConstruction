<?php

class Login extends CI_Controller{
    
    //Load login page for administrator
    public function index(){
        $this->load->view('login');
    }
    
    //Load admin dashbord of the credentials are correct
    public function loginAdmin(){
 
        $data['user_id']=$_POST['user_id'];
        $data['user_password']=$_POST['user_password'];
        $this->load->model('user');
        $result=$this->user->checkLogin($data);
        if(count($result)>0){
            header('Location: ../../../gamunuMVC/index.php/admin/index');  
        }else{
            $this->load->view('tryagain');
        }
        
    }
}




?>