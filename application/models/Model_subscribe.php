<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_subscribe extends CI_Model{
    public function get_subscribe(){
        $tb_subscribe = $this->db->get('tb_subscribe');
        return $tb_subscribe;
    }

    function addnewproducts($data){
        if($data['email_cust']!="")    
        {
            $res=$this->db->insert('tb_subscribe',$data);
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
}
?>