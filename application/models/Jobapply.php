<?php
//Job application model 
class Jobapply extends CI_Model{
    //Add job application  
    public function addApplication($data){
        $result=$this->db->insert('jobapply',$data);
        return $result;
    }
    
    //Get all job applications
    public function getApplies(){
        $result=$this->db->get('jobapply');
        return $result->result_array();
    }
    
    //Get job application count
    public function getAppliesCount(){
        $this->db->select('worker_id')
                ->from('jobapply');
        $result=$this->db->count_all_results();
        
        return $result;
    }
    
    //Delete job application
    public function deleteJobApply($id){
        $this->db->where('worker_id',$id);
        $result=$this->db->delete('jobapply');
        return $result;
    }
}

?>