<?php

//Project/Tasks Model
class Projects extends CI_Model{
    
    //Get tasks
    public function getProjects(){
        $result=$this->db->get('projects');
        return $result->result_array();
    }
    
    //Get tasks count
    public function getProjectsCount(){
        $this->db->select('project_id')
                ->from('projects');
        $result=$this->db->count_all_results();
        
        return $result;
        
    }
    
    //Get total eranings from tasks
    public function getTotalEarnings(){
        $result=$this->db->query("SELECT SUM('project_cost') AS totalEarning FROM projects;");
        return $result;
        
    }
    
    //Get workers count for each task
    public function getProjectWorkerCount(){
        $result=$this->db->get('projects');
        return $result->result_array();
    }
    
    //Add tasks
    public function addProjects($data){
        $result=$this->db->insert('projects',$data);
        return $result;
    }
    
    //Update tasks
    public function updateProjects($data){
        $this->db->set('project_name',$data['project_name']);
        $this->db->set('project_loc',$data['project_loc']);
        $this->db->set('project_cost',$data['project_cost']);
        $this->db->set('worker_count',$data['worker_count']);
        $this->db->where('project_id',$data['project_id']);
        $result=$this->db->update('projects');
        return $result;
    }
    
    //Start task
    public function startProject($id){
        $this->db->set('start_date','2018-09-17');
        $this->db->set('project_status','started');
        $this->db->where('project_id',$id);
        $this->db->update('projects');
    }
    
    //Complete tasks
    public function completeProject($id){
        $this->db->set('end_date','2018-09-17');
        $this->db->set('project_status','completed');
        $this->db->where('project_id',$id);
        $this->db->update('projects');
    }
}

?>