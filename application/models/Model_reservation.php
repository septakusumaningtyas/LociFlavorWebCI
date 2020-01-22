<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_reservation extends CI_Model{
    public function GetReservation(){
        $data = $this->db->query("SELECT * FROM tb_reservation");
        return $data->result_array();
    }
}
?>