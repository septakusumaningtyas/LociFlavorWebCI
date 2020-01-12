<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
   public function index()
   {
        $this->load->helper('url');
        $data['title'] = "Loci Flavor - Contact";
        $this->load->view('template/header' , $data);
        $this->load->view('template/navbar');
        $this->load->view('contact');
        $this->load->view('template/footer');
        $this->load->view('template/script');
   }
}