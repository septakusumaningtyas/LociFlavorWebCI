<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
   public function index()
   {
        $data['title'] = "Loci Flavor - About";
        $this->load->view('template/header' , $data);
        $this->load->view('template/navbar');
        $this->load->view('about');
        $this->load->view('template/footer');
        $this->load->view('template/script');
   }
}