<?php
//Notification model
class Notifications extends CI_Model{
    
    //Update notifications
    public function updateNotificationsStatus(){
        $this->db->set('status',1);
        $this->db->where('status',0);
        $this->db->update('notifications');
    }
    
    //Get all notification unread
    public function getNotifications(){
        $this->db->where('status',0);
        $result['notification']=$this->db->get('notifications')->result_array();
        $result['count']=$this->db->get('notifications')->num_rows();
        return $result;
    }
    
    //add otifications
    public function addNotifications($msg){
        $d=mktime(11, 14, 54, 8, 12, 2014);
        $data['date']=date("Y-m-d h:i:sa", $d);
        $data['notification']=$msg;
        $data['status']=0;
        $this->db->insert('notifications',$data);
    }
}

?>