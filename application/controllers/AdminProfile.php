<?php

defined('BASEPATH') or exit('No direct script access allowed');

 class AdminProfile extends CI_Controller
{

	
	public function __construct() {
        parent::__construct();

        $this->load->model('AdminProfileModel', 'adminprofile');
		  $this->load->model('SessionModel', 'sesMod');
    }

  
	public function index()
	{

        if (!$this->session->logged_in) 
        {
			redirect(base_url() . 'adminlogin');
		}

		$data['page_title'] = "Admin Profile";
		$data['page'] = "user/a_profile_view";

        $this->load->view('_Layout/home/master.php', $data);
		
    }



}
