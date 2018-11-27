<?php
//Services Model
class Services extends CI_Model{
    
    //Get all houses desings
    public function getHouses(){
        $this->db->where('service_type','house');
        $result=$this->db->get('services');
        return $result->result_array();
    }
    
    //Get a house with given id
    public function getHouse($id){
        $this->db->where('service_id',$id);
        $result=$this->db->get('services');
        
        return $result->result_array();
    }
    
    //Get all servies with houses
    public function getServices(){
        $result=$this->db->get('services');
        return $result->result_array();
    }
    
    //Add new services
    public function addService($data){
        $result=$this->db->insert('services',$data);
        return $result;
    }
    
    //Remove existing services
    public function removeService($id){
        $this->db->where('service_id',$id);
        $result=$this->db->delete('services');
        return $result;
    }
    
    //Update services
    public function updateService($data){
        $this->db->set('service_name',$data['service_name']);
        $this->db->set('service_type',$data['service_type']);
        $this->db->set('price',$data['price']);
        $this->db->where('service_id',$data['service_id']);
        $result=$this->db->update('services');
        return $result;
    }
}

?>