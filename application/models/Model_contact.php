<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contact extends CI_Model{
    public function get_contact(){
        $tb_email = $this->db->get('tb_email');
        return $tb_email;
    }
}
?>