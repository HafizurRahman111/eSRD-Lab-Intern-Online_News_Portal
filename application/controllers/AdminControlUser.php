<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminControlUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminControlUserModel', 'admincontroluser');
		  $this->load->model('SessionModel', 'sesMod');
    }


	 public function index()
	{
		if (!$this->session->logged_in) 
        {
			redirect(base_url() . 'adminlogin');
		}

		$data['page_title'] = "User Control Page";
		$data['page'] = "user/admin_control_user_view";
		
		$this->load->view('_Layout/home/master.php', $data);
        
	}


  


    
}
