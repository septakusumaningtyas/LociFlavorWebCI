<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_menu extends CI_Model{
    public function get_menu(){
        $tb_menu = $this->db->get('tb_menu');
        return $tb_menu;
    }
}
?>