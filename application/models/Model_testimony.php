<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimony extends CI_Model{
    public function get_testimony(){
        $tb_testimony = $this->db->get('tb_testimony');
        return $tb_testimony;
    }
}
?>