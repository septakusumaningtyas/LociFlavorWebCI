<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_reservation extends CI_Model{
    public function get_reservation(){
        $tb_reservation = $this->db->get('tb_reservation');
        return $tb_reservation;
    }
}
?>