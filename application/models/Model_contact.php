<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contact extends CI_Model{
    public function get_contact(){
        $tb_email = $this->db->get('tb_email');
        return $tb_email;
    }

    function addnewproducts($data){
        if($data['name_email']!="" && $data['email_email']!="" && $data['subject_email']!="" && $data['msg_email']!="")    
        {
            $res=$this->db->insert('tb_email',$data);
            return $this->db->insert_id();
        }
        else
        {
        return false;
        }
    }
}
?>