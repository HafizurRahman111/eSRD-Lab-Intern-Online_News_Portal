
  <!----------------------  My Profile Controller Page ---------------------->


<?php

defined('BASEPATH') or exit('No direct script access allowed');

 class Profile extends CI_Controller
{

	 public function __construct() 
    {
        parent::__construct();

        $this->load->model('ProfileModel', 'profile');
		  $this->load->model('SessionModel', 'sesMod');

    }

  
	 public function index()
	{

        if (!$this->session->logged_in) 
        {
			redirect(base_url() . 'login');
		}

        $v = $this->session->userdata('name')  ;

		$data['page_title'] = "$v";
		$data['page'] = "user/profile_view";

        $this->load->view('_Layout/home/master.php', $data);
		
    }


	 public function store_messages()
    {
        
        $insert = $this->profile->add_msg($this->input->post());

         if($insert) 
        {
		  $this->session->logged_in = true ;
		  $this->session->userid = $insert ;

        } 

          else 
         {
			redirect(base_url('profile'), 'refresh');
		
          }
            
        
    }


     public function show_message_history($mid)
    {
        
        $data= $this->ProfileModel->get_message_history($mid);
        
        $this->load->view('profile_view', $data);

 
    }



     public function edit_profile()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
       
      
         if (!$this->form_validation->run()) 
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'profile');

        } 

         else 
        {
            $insert = $this->profile->edit($this->input->post());

             if($insert) 
            {
                $this->session->logged_in = true ;
                $this->session->userid = $insert ;

                redirect(base_url() . 'welcome');

            } 
            
            else 
            {
                $this->session->logged_in = false;
                redirect(base_url() . 'login');
            }
            
        }
    }



    public function change_password()
    {
        $this->form_validation->set_rules('old_pass', 'Current Password', 'required|min_length[5]');
        $this->form_validation->set_rules('new_pass', 'New Password', 'required|matches[confirm_pass]');
       
        $this->form_validation->set_rules('confirm_pass', 'Confirm New Password', 'required|min_length[5]');
      

         if (!$this->form_validation->run()) 
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'profile');

        } 

         else 
        {
            $insert = $this->profile->change_pass($this->input->post());

             if($insert) 
            {
                $this->session->logged_in = true ;
                $this->session->userid = $insert ;

                redirect(base_url() . 'welcome');

            } 
            
            else 
            {
                $this->session->logged_in = false;
                redirect(base_url() . 'login');
            }
            
        }
    }













}
