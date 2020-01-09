<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['title'] = "Ini Home";
        $data['desk'] = "Ini desk";
        $this->load->view('template/header' , $data);
        $this->load->view('home');

	}
}
