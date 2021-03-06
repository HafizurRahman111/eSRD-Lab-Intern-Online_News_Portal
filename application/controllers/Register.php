

 <!----------------------  Registration Controller Page ---------------------->

<?php


 class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('RegisterModel', 'register');
		  $this->load->model('SessionModel', 'sesMod');

    }

     public function index()
    {
         if ( $this->session->logged_in ) 
        {
            redirect(base_url() . 'profile');
        }

        $data['page_title'] = "Registration";
        $data['page'] = "user/registration";

        $this->load->view('_Layout/home/master.php', $data);
    }

    
     public function registeruser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[6]');
        $this->form_validation->set_rules('uname', 'User Name', 'required|trim');

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
        $this->form_validation->set_rules('bdate', 'Birthday', 'required');

        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        
         if (!$this->form_validation->run()) 
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'register');

        } 

         else 
        {
            $insert = $this->register->add_user($this->input->post());

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
