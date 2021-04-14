

  <!----------------------  News Deatils Single Controller Page ---------------------->


<?php
defined('BASEPATH') or exit('No direct script access allowed');

 class NewsDetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('NewsDetailsModel', 'newsdetails');
		  $this->load->model('SessionModel', 'sesMod');

    }

	 public function index()
	{
        
		$data['page_title'] = "News Details";
        $data['page'] = "news_details_v";
        
        $this->load->view('_Layout/home/master.php', $data);
        
    }
    

         public function show_details_news($id)
        {
            
            $data= $this->NewsDetailsModel->get_details_news($id);
            
            $this->load->view('news_details_v', $data);

        }


         public function comment()
        {
            
            $insert = $this->newsdetails->add_comment($this->input->post());
    
             if($insert) 
            {
                  $this->session->logged_in = true ;
                  $this->session->userid = $insert ;
    
            } 
    
                
              else 
             {
                     redirect(base_url('welcome'), 'refresh');
            
              }
                
            
        }






}





  






   














