<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function index()
	{
        $data['title'] = "Loci Flavor - Menu";
        $this->load->view('template/header' , $data);
        $this->load->view('template/navbar');
        $this->load->view('menu');
        $this->load->view('template/footer');
        $this->load->view('template/script');
	}
}