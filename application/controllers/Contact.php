<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function index()
    {
       $this->load->model('model_contact');
       $this->load->model('model_testimony');
       $data['tb_email'] = $this->model_contact->get_contact()->result();
       $data['tb_testimony'] = $this->model_testimony->get_testimony()->result();
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
      $this->load->library('form_validation');

      $this->form_validation->set_rules('name_email','Your Name','required');
      $this->form_validation->set_rules('email_email','Your Email','required|valid_email');
      $this->form_validation->set_rules('subject_email','Subject','required');
      $this->form_validation->set_rules('msg_email','Message','required');

      if ($this->form_validation->run() == FALSE){
         $this->load->model('model_contact');
         $this->load->model('model_testimony');
         $data['tb_email'] = $this->model_contact->get_contact()->result();
         $data['tb_testimony'] = $this->model_testimony->get_testimony()->result();
         $data['title'] = "Loci Flavor - Contact";
         $this->load->view('template/header' , $data);
         $this->load->view('template/navbar');
         $this->load->view('contact');
         $this->load->view('template/footer');
         $this->load->view('template/script');
      }
      else {
         $data = array(
            'name_email'     =>  $this->input->post('name_email'),
            'email_email'    =>  $this->input->post('email_email'),
            'subject_email'  =>  $this->input->post('subject_email'),
            'msg_email'      =>  $this->input->post('msg_email')
         );
           $this->db->insert('tb_email',$data);
           
           $insert_id = $this->db->insert_id();
   
           $_SESSION['contact_insert_id'] = $insert_id;
           $this->session->mark_as_flash('contact_insert_id');
           
           redirect('contact');  
      }
    }

    function input_testimony()
    {
      $this->load->library('form_validation');

      $this->form_validation->set_rules('name_test','Name','required');
      $this->form_validation->set_rules('position_test','Position','required');
      $this->form_validation->set_rules('msg_test','Testimony','required');

      if ($this->form_validation->run() == FALSE){
         $this->load->model('model_contact');
         $this->load->model('model_testimony');
         $data['tb_email'] = $this->model_contact->get_contact()->result();
         $data['tb_testimony'] = $this->model_testimony->get_testimony()->result();
         $data['title'] = "Loci Flavor - Contact";
         $this->load->view('template/header' , $data);
         $this->load->view('template/navbar');
         $this->load->view('contact');
         $this->load->view('template/footer');
         $this->load->view('template/script');
      }
      else{
         $data = array(
            'name_test'      =>  $this->input->post('name_test'),
            'position_test'  =>  $this->input->post('position_test'),
            'msg_test'       =>  $this->input->post('msg_test')
         );
           $this->db->insert('tb_testimony',$data);
           
           $insert_id = $this->db->insert_id();
   
           $_SESSION['testimony_insert_id'] = $insert_id;
           $this->session->mark_as_flash('testimony_insert_id');
           
           redirect('contact');  
      }
    }
}