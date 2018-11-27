<?php

//Order model
class Order extends CI_Model{
    
    //Add order
    public function addOrder($data){
        $d=mktime(11, 14, 54, 8, 12, 2014);
        $data['date']=date("Y-m-d h:i:sa", $d);
        $result=$this->db->insert('orders',$data);
        return $result;
    }
    //Get all orders
    public function getOrders(){
        $this->db->select('*')
                          ->from('orders')
                          ->join('services', 'orders.service_id = services.service_id');
        $this->db->distinct('order.order_id');
        $result=$this->db->get();
        return $result->result_array();
    }
    
    //get orders count
    public function getOrdersCount(){
        $this->db->select('order_id')
                ->from('orders');
        $result=$this->db->count_all_results();
        
        return $result;
        
    }
    
    //Delete orders
    public function deleteOrder($id){
        $this->db->where('order_id',$id);
        $result=$this->db->delete('orders');
        return $result;
        
    }
}

?>