<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
   public function index()
   {     
      $this->load->model('model_menu');
      $data['tb_menu'] = $this->model_menu->get_menu()->result();
      $data['title'] = "Loci Flavor - Home";
      $this->load->view('template/header' , $data);
      $this->load->view('template/navbar');
      $this->load->view('home');
      $this->load->view('template/footer');
      $this->load->view('template/script');
   }
}