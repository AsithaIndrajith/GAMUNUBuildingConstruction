<?php

//Worker model
class Worker extends CI_Model{
    
    //Add workers to the system
    public function addWorker($data){
        $result=$this->db->insert('workers',$data);
        return $result;
    }
    
    //Get workers
    public function getWorkers(){
        $result=$this->db->get('workers');
        return $result->result_array();
    }
    
    //Get workers count
    public function getWorkersCount(){
        $this->db->select('worker_id')
                ->from('workers');
        $result=$this->db->count_all_results();
        
        return $result;
    }
    
    //Delete workers
    public function deleteWorker($id){
        $this->db->where('worker_id',$id);
        $result=$this->db->delete('workers');
        return $result;
    }
    
    //Get workers job types with a count
    public function getWorkerTypes(){
        $result['masons']=$this->db->query("SELECT COUNT('worker_id') AS masons FROM workers WHERE worker_type LIKE 'Mason';")->result_array();
        $result['electrisians']=$this->db->query("SELECT COUNT('worker_id') AS electrisians FROM workers WHERE worker_type LIKE 'Electrisian';")->result_array();
        $result['welders']=$this->db->query("SELECT COUNT('worker_id') AS welders FROM workers WHERE worker_type LIKE 'Welders';")->result_array();
        $result['tile']=$this->db->query("SELECT COUNT('worker_id') AS tile FROM workers WHERE worker_type LIKE 'Tile';")->result_array();
        return $result;
        
    }
}

?>