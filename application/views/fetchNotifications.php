<?php
if(isset($_POST["view"]))
{
   
    if($_POST["view"] != ''){
        $this->db->set('status',1);
        $this->db->where('status',0);
        $this->db->update('notifications');
    }
    
    
    $result=$this->db->get('notifications')->result_array();
     
    $this->db->where('status',0);
    $count=3//$this->db->get('notifications');
    
    $data = array('notification'   => $result,'unseen_notification' => $count);
    echo json_encode($data);
}
?>
