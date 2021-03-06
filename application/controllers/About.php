


 <!-------- About Us Controller Page --------->

<?php

   defined('BASEPATH') or exit('No direct script access allowed');


   class About extends CI_Controller
  {

     public function __construct()
    {
        parent::__construct();

        $this->load->model('AboutModel', 'about');
		  $this->load->model('SessionModel', 'sesMod');

    }

    
        public function index()
        {

            $data['page_title'] = "About Us";
            $data['page'] = "about_view";
            
            $this->load->view('_Layout/home/master.php', $data);
            
        }
    


}





  






   














