<?php
//Administrator controller
class Admin extends CI_Controller{
    
    //default function
    public function index(){
        //Load all orders
        $this->load->model('order');
        $data['records']=$this->order->getOrders();
        
        //Load all job applications
        $this->load->model('jobapply');
        $data['jobapplies']=$this->jobapply->getApplies();
        
        //Load all warkers
        $this->load->model('worker');
        $data['worker']=$this->worker->getWorkers();
        
        //Get count of total orders
        $this->load->model('order');
        $data['orderCount']=$this->order->getOrdersCount();
        
        //Get count of total job applications
        $this->load->model('jobapply');
        $data['jobappliesCount']=$this->jobapply->getAppliesCount();
        
        //Get count of total projects
        $this->load->model('projects');
        $data['projectsCount']=$this->projects->getProjectsCount();
        
        //Get count of total earnings
        $this->load->model('projects');
        $data['totalEarnings']=$this->projects->getTotalEarnings();
        
        //Get project locations with worker count
        $this->load->model('projects');
        $data['projectWorkers']=$this->projects->getProjectWorkerCount();
        
        //Get workers count
        $this->load->model('worker');
        $data['workersCount']=$this->worker->getWorkersCount();
        
        //Get workers type count getToolTypes
        $this->load->model('worker');
        $data['workerTypes']=$this->worker->getWorkerTypes();
        
        //Get tools type count
        $this->load->model('resources');
        $data['toolTypes']=$this->resources->getToolTypes();
        
        $this->load->model('notifications');
        $result=$this->notifications->getNotifications();
        
        $data['notification']=$result['notification'];
        $data['count']=$result['count'];
        
        
        $this->load->view('admin',$data);
    }
    
    public function services(){
        //Load all services
        $this->load->model('services');
        $data['records']=$this->services->getServices();
        
        //Load all job applications
        $this->load->model('jobapply');
        $data['jobapplies']=$this->jobapply->getApplies();
        
        //Load all workers
        $this->load->model('worker');
        $data['worker']=$this->worker->getWorkers();
        
        //Get count of total orders
        $this->load->model('order');
        $data['orderCount']=$this->order->getOrdersCount();
        
        //Get count of total job applications
        $this->load->model('jobapply');
        $data['jobappliesCount']=$this->jobapply->getAppliesCount();
        
        //Get count of total projects
        $this->load->model('projects');
        $data['projectsCount']=$this->projects->getProjectsCount();
        
        //Get count of total earnings
        $this->load->model('projects');
        $data['totalEarnings']=$this->projects->getTotalEarnings();
        
        //Get workers count
        $this->load->model('worker');
        $data['workersCount']=$this->worker->getWorkersCount();
        
        //Get project locations with worker count
        $this->load->model('projects');
        $data['projectWorkers']=$this->projects->getProjectWorkerCount();
        
        //Get workers type count getToolTypes
        $this->load->model('worker');
        $data['workerTypes']=$this->worker->getWorkerTypes();
        
        //Get tools type count
        $this->load->model('resources');
        $data['toolTypes']=$this->resources->getToolTypes();
        
        $this->load->model('notifications');
        $result=$this->notifications->getNotifications();
        
        $data['notification']=$result['notification'];
        $data['count']=$result['count'];
        
        $this->load->view('services',$data);
    }
    
     public function resources(){
        $this->load->model('resources');
        $data['records']=$this->resources->getResources();
        
        $this->load->model('jobapply');
        $data['jobapplies']=$this->jobapply->getApplies();
        
        $this->load->model('worker');
        $data['worker']=$this->worker->getWorkers();
         
         //Get count of total orders
        $this->load->model('order');
        $data['orderCount']=$this->order->getOrdersCount();
        
        //Get count of total job applications
        $this->load->model('jobapply');
        $data['jobappliesCount']=$this->jobapply->getAppliesCount();
        
        //Get count of total projects
        $this->load->model('projects');
        $data['projectsCount']=$this->projects->getProjectsCount();
        
        //Get count of total earnings
        $this->load->model('projects');
        $data['totalEarnings']=$this->projects->getTotalEarnings();
        
        //Get workers count
        $this->load->model('worker');
        $data['workersCount']=$this->worker->getWorkersCount();
         
         //Get project locations with worker count
        $this->load->model('projects');
        $data['projectWorkers']=$this->projects->getProjectWorkerCount();
         
         //Get workers type count
        $this->load->model('worker');
        $data['workerTypes']=$this->worker->getWorkerTypes();
        
        //Get tools type count
        $this->load->model('resources');
        $data['toolTypes']=$this->resources->getToolTypes();
         
        $this->load->model('notifications');
        $result=$this->notifications->getNotifications();
        
        $data['notification']=$result['notification'];
        $data['count']=$result['count'];
         
        $this->load->view('resources',$data);
    }
    
    public function projects(){
        //Load all projects
        $this->load->model('projects');
        $data['records']=$this->projects->getProjects();
        
        $this->load->model('jobapply');
        $data['jobapplies']=$this->jobapply->getApplies();
        
        $this->load->model('worker');
        $data['worker']=$this->worker->getWorkers();
         
         //Get count of total orders
        $this->load->model('order');
        $data['orderCount']=$this->order->getOrdersCount();
        
        //Get count of total job applications
        $this->load->model('jobapply');
        $data['jobappliesCount']=$this->jobapply->getAppliesCount();
        
        //Get count of total projects
        $this->load->model('projects');
        $data['projectsCount']=$this->projects->getProjectsCount();
        
        //Get count of total earnings
        $this->load->model('projects');
        $data['totalEarnings']=$this->projects->getTotalEarnings();
        
        //Get workers count
        $this->load->model('worker');
        $data['workersCount']=$this->worker->getWorkersCount();
        
        //Get project locations with worker count
        $this->load->model('projects');
        $data['projectWorkers']=$this->projects->getProjectWorkerCount();
        
        //Get workers type count
        $this->load->model('worker');
        $data['workerTypes']=$this->worker->getWorkerTypes();
        
        //Get tools type count
        $this->load->model('resources');
        $data['toolTypes']=$this->resources->getToolTypes();
        
        $this->load->model('notifications');
        $result=$this->notifications->getNotifications();
        
        $data['notification']=$result['notification'];
        $data['count']=$result['count'];
         
        $this->load->view('projects',$data);
    }
    
    
    public function addWorkers(){
        //Add workers with following details
        $this->load->model('worker');
        $data['worker_name']=$_POST['worker_name'];
        $data['worker_phone']=$_POST['worker_phone'];
        $data['worker_address']=$_POST['worker_address'];
        $data['worker_type']=$_POST['job_type'];
        $result=$this->worker->addWorker($data);
        
        //Load back to the admin page
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Delete workers
    public function deleteWorkers($id){
        $this->load->model('worker');
        $result=$this->worker->deleteWorker($id);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Delete orders
    public function deleteOrders($id){
        $this->load->model('order');
        $result=$this->order->deleteOrder($id);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Add confirmed orders as projects
    public function addProjects($order_id,$customer_name,$service_name){
        $this->load->model('projects');
        $data['project_name']=$service_name;
        $data['customer_name']=$customer_name;
        $data['order_id']=$order_id;
        $data['start_date']="Not started";
        $data['end_date']="Not started";
        $data['project_status']="not complete";
        $result=$this->projects->addProjects($data);
         
        //Then delete the confirmed order
        $this->load->model('order');
        $result=$this->order->deleteOrder($order_id);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Delete job application
    public function deleteJobApply($id){
        $this->load->model('jobapply');
        $this->jobapply->deleteJobApply($id);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Accept job application and add them as workers 
    public function addJobapply($worker_id,$worker_name,$worker_phone,$job_type){
        $this->load->model('worker');
        $data['worker_name']=urldecode($worker_name);
        $data['worker_phone']=$worker_phone;
        $data['worker_type']=$job_type;
        $result=$this->worker->addWorker($data);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Add service given by the system
    public function addServices(){
        $data['service_id']=$_POST['service_id'];
        $data['service_image']="../../public/img/img-items/product-img/999.png";
        $data['service_name']=$_POST['service_name'];
        $data['service_type']=$_POST['service_type'];
        $data['price']=$_POST['service_price'];
        $this->load->model('services');
        $this->services->addService($data);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Remove service
    public function removeService($id){
        $this->load->model('services');
        $this->services->removeService($id);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Update services
    public function updateServices(){
        $data['service_name']=$_POST['service_name'];
        $data['service_type']=$_POST['service_type'];
        $data['price']=$_POST['price'];
        $data['service_id']=$_POST['service_id'];
        $this->load->model('services');
        $this->services->updateService($data);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Add resources
    public function addResources(){
        $data['resource_type']=$_POST['resource_type'];
        $data['resource_name']=$_POST['resource_name'];
        $data['resource_count']=$_POST['resource_count'];
        $data['available']=$_POST['resource_count'];
        $data['resource_owner']=$_POST['resource_owner'];
        $this->load->model('resources');
        $this->resources->addResource($data);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Remove resources
    public function removeResources($id){
        $this->load->model('resources');
        $this->services->removeResource($id);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //update resources
    public function updateResources(){
        $data['resource_id']=$_POST['resource_id'];
        $data['resource_type']=$_POST['resource_type'];
        $data['resource_name']=$_POST['resource_name'];
        $data['resource_count']=$_POST['resource_count'];
        $data['available']=$_POST['available'];
        $data['resource_owner']=$_POST['resource_owner'];
        $this->load->model('resources');
        $this->resources->updateResource($data);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Update projects doing by the client
    public function updateProjects(){
        $data['project_id']=$_POST['project_id'];
        $data['project_name']=$_POST['project_name'];
        $data['project_loc']=$_POST['project_loc'];
        $data['project_cost']=$_POST['project_cost'];
        $data['worker_count']=$_POST['worker_count'];
        $this->load->model('projects');
        $this->projects->updateProjects($data);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Start project when everything is ready
    public function startProject($id){
        $this->load->model('projects');
        $this->projects->startProject($id);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Complete project
    public function completeProject($id){
        $this->load->model('projects');
        $this->projects->completeProject($id);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    
    //Get notifications
    public function getNotifications(){
        $this->load->model('notifications');
        $result=$this->notifications->getNotifications();
        
    }
    
    
    
    
}




?>