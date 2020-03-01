<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
   public function index()
   {
        $this->load->model('model_testimony');
        $data['title'] = "Loci Flavor - About";
        $data['tb_testimony'] = $this->model_testimony->get_testimony()->result();
        $this->load->view('template/header' , $data);
        $this->load->view('template/navbar');
        $this->load->view('about');
        $this->load->view('list_testimony' , $data);
        $this->load->view('template/footer');
        $this->load->view('template/script');
   }
}