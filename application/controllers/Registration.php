<?php
//Job application controller
class Registration extends CI_Controller{
    
    //Load job application
    public function index(){
        $this->load->view('registration');
    }
    
    //Submit job application
    public function insertForm(){
        $data=$_POST;
        $data['worker_id']=rand(10,1000);
        $this->load->model('jobApply');
        $result=$this->jobApply->addApplication($data);
        if($result!=0){
            $this->load->view('message');    
        }else{
            $this->load->view('tryagain');
        }
        
    }
}




?>