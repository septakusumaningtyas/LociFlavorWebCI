<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
   public function index()
   {
      $this->load->model('model_reservation');
      //$data['reservation'] = $this->model_reservation->GetReservation()->result();
      $data['title'] = "Loci Flavor - Reservation";
      $this->load->view('template/header' , $data);
      $this->load->view('template/navbar');
      $this->load->view('reservation');
      $this->load->view('list_reservation',$data);
      $this->load->view('template/footer');
      $this->load->view('template/script');
      $data['tb_reservation'] = $this->model_reservation->get_reservation()->result();
      $this->load->view('get_reservation', $data);
   }
   function input()
   {
     $this->load->view('reservation');
   }
    
   function input_simpan()
   {
      $data = array(
         'kode_barang'   =>  $this->input->post('kode_barang'),
         'nama_barang'   =>  $this->input->post('nama_barang'),            'harga'         =>  $this->input->post('harga_barang'));
        $this->db->insert('tb_reservation',$data);
        redirect('tb_reservation');   
   }
}