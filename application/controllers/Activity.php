<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel', 'register');
		  $this->load->model('SessionModel', 'sesMod');
    }

	public function index()
	{
		if (!$this->session->logged_in) {
			redirect(base_url() . 'login');
		}
		$data['page_title'] = "UserActivity";
		$data['page'] = "user/useractivity";
		$data['mod'] = $this->register;
		$this->load->view('_Layout/home/master.php', $data);
	}
}
