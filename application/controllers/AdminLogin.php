<?php


 class AdminLogin extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminLoginModel', 'adminlogin');
		  $this->load->model('SessionModel', 'sesMod');
    }
    
    public function index()
    {
         if ($this->session->logged_in) 
        {
            redirect(base_url() . 'adminprofile');
        }

        $data['page_title'] = "Admin Log In";
        $data['page'] = "user/adminlogin";

        $this->load->view('_Layout/home/master.php', $data);

    }

     public function a_doLogin()
    {
        $a_email = $this->input->post('a_email');
        $a_pass = $this->input->post('a_pass');

        $check_login = $this->adminlogin-> a_checkLogin ($a_email, $a_pass);

         if ($check_login) 
        {
            $this->session->set_userdata('logged_in', true);
            redirect(base_url(). 'adminprofile' );
        } 
        

         else 
        {
            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Admin Your Username / Password Invalid. Try Again.');
            redirect(base_url() . 'adminlogin');

        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'adminlogin');
    }


  



}

