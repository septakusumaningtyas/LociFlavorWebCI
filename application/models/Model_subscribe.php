<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_subscribe extends CI_Model{
    public function get_subscribe(){
        $tb_subscribe = $this->db->get('tb_subscribe');
        return $tb_subscribe;
    }
}
?>