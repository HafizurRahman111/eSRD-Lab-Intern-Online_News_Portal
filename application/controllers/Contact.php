

  <!-----------------------------------  eSRD News ------------------------------->
                <!----------------  Md. Hafizur Rahman ---------------->

    <!----------------------  Contact Us Controller Page ---------------------->

<?php

defined('BASEPATH') or exit('No direct script access allowed');


 class Contact extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();

        $this->load->model('ContactModel', 'contact');
		  $this->load->model('SessionModel', 'sesMod');

    }



        public function index()
      {
            
            $data['page_title'] = "Contact Us";
            $data['page'] = "contact_view";
            
            $this->load->view('_Layout/home/master.php', $data);
            
      }


       public function store_message()
      {
          $this->form_validation->set_rules('c_name', 'Name', 'required|min_length[5]');
          $this->form_validation->set_rules('c_email', 'Email', 'required');
          $this->form_validation->set_rules('c_message', 'Message', 'required');
  
  
           if (!$this->form_validation->run()) 
          {
              $this->session->set_flashdata('errors', validation_errors());
              redirect(base_url() . 'contact');
          } 
          
         
          else {
  
              $insert = $this->contact->add_message_contact($this->input->post());
  
              
               if($insert) 
              {
                  $this->session->logged_in = true;
                  $this->session->userid = $insert;
                  redirect(base_url() . 'welcome');
              } 
              
              else {
                     $this->session->logged_in = false;
                     redirect(base_url() . 'about');
              }
              
          }
      }
  
    


}





   














