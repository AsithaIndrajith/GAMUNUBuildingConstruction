<?php

class Signup extends CI_Controller{
    
    //Load signup page for administrator
    public function index(){
        $this->load->view('signup');
    }
    
    //Insert customer details to system
    public function signupCustomer(){
 
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