<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
   public function index()
   {
      $this->load->model('model_contact');
      $data['tb_email'] = $this->model_contact->get_contact()->result();
      $data['title'] = "Loci Flavor - Contact";
      $this->load->view('template/header' , $data);
      $this->load->view('template/navbar');
      $this->load->view('contact');
      $this->load->view('template/footer');
      $this->load->view('template/script');
   }

   function input()
   {
     $this->load->view('contact');
   }
    
   function input_simpan()
   {
      $data = array(
         'name_email'     =>  $this->input->post('name_email'),
         'email_email'    =>  $this->input->post('email_email'),
         'subject_email'  =>  $this->input->post('subject_email'),
         'msg_email'      =>  $this->input->post('msg_email')
      );
        $this->db->insert('tb_email',$data);
        redirect('contact/index');   
   }
}