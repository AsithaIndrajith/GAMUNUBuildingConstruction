<?php
//Resources/Tools Model
class Resources extends CI_Model{
    
    //Get all resources
    public function getResources(){
        $result=$this->db->get('resources');
        return $result->result_array();
    }
    
    //Add resources
    public function addResource($data){
        $result=$this->db->insert('resources',$data);
        return $result;
    }
    
    //Update resources
    public function updateResource($data){
        $this->db->set('resource_type',$data['resource_type']);
        $this->db->set('resource_name',$data['resource_name']);
        $this->db->set('resource_count',$data['resource_count']);
        $this->db->set('available',$data['available']);
        $this->db->set('resource_owner',$data['resource_owner']);
        $this->db->where('resource_id',$data['resource_id']);
        $result=$this->db->update('resources');
        return $result;
    }
    
    //Get tools types
    public function getToolTypes(){
        $result=$this->db->get('resources')->result_array();
        return $result;
        
    }
}

?>