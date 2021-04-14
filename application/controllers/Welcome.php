
 <!----------------------  News Homepage Controller Page ---------------------->


<?php

defined('BASEPATH') or exit('No direct script access allowed');


  class Welcome extends CI_Controller
 {

	 public function __construct() 
	{
        parent::__construct();

		  $this->load->model('SessionModel', 'sesMod');

	}


		public function index()
	   {
			$data['page_title'] = "eSRD News";
			$data['page'] = "homepage_news";

			$this->load->view('_Layout/home/master.php', $data);

	   }



}
