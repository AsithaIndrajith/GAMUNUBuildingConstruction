<?php

class Items extends CI_Controller{
    
    //Load house designs
    public function index(){
        $this->load->model('services');
        $data['records']=$this->services->getHouses();
        $this->load->view('items',$data);
    }
    
    //Place orders about house buildings
    public function placeorder($id){
        $this->load->model('services');
        $data['records']=$this->services->getHouse($id);
        $this->load->view('placeorder',$data);
    }
    
    //Load comming soon page
    public function comminsoon(){
        $this->load->view('comminsoon');
    }
    
    //Submit orders given by customers for house buildings
    public function submitorder(){
        $this->load->model('order');
        $data=array('service_id'=>$_POST['cus_service_id'],'cus_name'=>$_POST['cus_name'],'cus_email'=>$_POST['cus_email'],'cus_phone'=>$_POST['cus_phone'],'cus_address'=>$_POST['cus_address']);
        $result=$this->order->addOrder($data);
        if($result!=0){
            //Send notification to the client
            $this->load->model('notifications');
            $this->notifications->addNotifications("You recieved an new order");
            $this->load->view('ordersuccess');
        }
    }
    
    
    
}

    
    
    
    
?>