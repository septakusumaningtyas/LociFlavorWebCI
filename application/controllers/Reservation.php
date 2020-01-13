<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
   public function index()
   {
        $data['title'] = "Loci Flavor - Reservation";
        $this->load->view('template/header' , $data);
        $this->load->view('template/navbar');
        $this->load->view('reservation');
        $this->load->view('template/footer');
        $this->load->view('template/script');
   }
}