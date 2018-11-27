<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//Load page home.php
	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('home');
	}
    
    //Load about.php
    public function about()
	{	
		$this->load->helper('url');
		$this->load->view('about-us');
	}
    
    //Load service.php
    public function services()
	{	
		$this->load->helper('url');
		$this->load->view('service');
	}
    
    //Load contact.php
    public function contact()
	{	
		$this->load->helper('url');
		$this->load->view('contact');
	}
    
    //Load form to place orders about repairs
    public function placeorderrepair(){
        $this->load->view('placeorderrepair');
    }
    
    //Load form to orders about paintings
    public function placeorderpainting(){
        $this->load->view('placeorderpainting');
    }
    
    //Load form to orders about tiles
    public function placeordertile(){
        $this->load->view('placeordertile');
    }
    
    //Load form to orders about building drawings
    public function placeorderdrawings(){
        $this->load->view('placeorderdrawings');
    }
    
    //load form to orders about house wirings
    public function placeorderwiring(){
        $this->load->view('placeorderwiring');
    }
    
    //Submit given about to the system
    public function submitorder(){
        $this->load->model('order');
        $data=array('service_id'=>$_POST['cus_service_id'],'cus_name'=>$_POST['cus_name'],'cus_email'=>$_POST['cus_email'],'cus_phone'=>$_POST['cus_phone'],'cus_address'=>$_POST['cus_address']);
        $result=$this->order->addOrder($data);
        if($result!=0){
            //If success send notification to the client
            $this->load->model('notifications');
            $this->notifications->addNotifications("You recieved an new order");
            $this->load->view('otherordersuccess');
        }
    }
}
