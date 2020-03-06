<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
   public function index()
   {
      $this->load->model('model_reservation');
      $data['tb_reservation'] = $this->model_reservation->get_reservation()->result();
      $data['title'] = "Loci Flavor - Reservation";
      $this->load->view('template/header' , $data);
      $this->load->view('template/navbar');
      $this->load->view('reservation');
      $this->load->view('list_reservation',$data);
      $this->load->view('template/footer');
      $this->load->view('template/script');
   }
   function input()
   {
     $this->load->view('reservation');
   }
    
   function input_simpan()
   {
      $this->load->library('form_validation');

      $this->form_validation->set_rules('book_name','Name','required');
      $this->form_validation->set_rules('book_email','Email','required|valid_email');
      $this->form_validation->set_rules('book_phone','Phone','required');
      $this->form_validation->set_rules('book_date','Date','required');
      $this->form_validation->set_rules('book_time','Time','required');
      $this->form_validation->set_rules('book_person','Person','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->model('model_reservation');
            $data['tb_reservation'] = $this->model_reservation->get_reservation()->result();
            $data['title'] = "Loci Flavor - Reservation";
            $this->load->view('template/header' , $data);
            $this->load->view('template/navbar');
            $this->load->view('reservation');
            $this->load->view('list_reservation',$data);
            $this->load->view('template/footer');
            $this->load->view('template/script');
        }
       
        else {
            $data = array(
               'name_reservation'     =>  $this->input->post('book_name'),
               'email_reservation'    =>  $this->input->post('book_email'),
               'phone_reservation'    =>  $this->input->post('book_phone'),
               'date_reservation'     =>  $this->input->post('book_date'),
               'time_reservation'     =>  $this->input->post('book_time'),
               'person_reservation'   =>  $this->input->post('book_person')
            );
            $this->db->insert('tb_reservation',$data);
            $insert_id = $this->db->insert_id();
 
            $_SESSION['reservation_insert_id'] = $insert_id;
            $this->session->mark_as_flash('reservation_insert_id');
            
            redirect('reservation');
        }
         
   }
}