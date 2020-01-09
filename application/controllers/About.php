<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
        $data['title'] = "Ini About";
        $data['desk'] = "Ini desk";
        $this->load->view('template/header' , $data);
        $this->load->view('about');

	}
}