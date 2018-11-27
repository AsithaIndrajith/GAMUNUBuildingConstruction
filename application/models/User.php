<?php
//User model
class User extends CI_Model{
    
    //Check login credentials
    public function checkLogin($data){
        $this->db->where('user_id',$data['user_id']);
        $this->db->where('user_password',$data['user_password']);
        $result=$this->db->get('users');
        return $result;
    }
}

?>