<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminCreateNews extends CI_Controller
{

	public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');

          $this->load->model('AdminCreateNewsModel', 'admincreatenews');
		  $this->load->model('SessionModel', 'sesMod');

         
    }
    

    public function index()
	{
        if ( !$this->session->logged_in ) 
        {
			redirect(base_url() . 'adminlogin');
		}

        $data['page_title'] = "Create New News Post";
		$data['page'] = "user/admin_create_news";

        $this->load->view('_Layout/home/master.php', $data);
		
    }


     public function store_news()
    {
        $this->form_validation->set_rules('n_title', 'Title', 'required|min_length[10]');
        $this->form_validation->set_rules('short_des', 'Short Description', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        $this->form_validation->set_rules('author', 'Author Name', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');


         if (!$this->form_validation->run()) 
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'admincreatenews');
        } 
        
       
        else {

            $insert = $this->admincreatenews->add_news($this->input->post());

            
             if($insert) 
            {
                $this->session->logged_in = true;
                $this->session->userid = $insert;
                redirect(base_url() . 'welcome');
            } 
            
            else {
               // $this->session->logged_in = false;
                redirect(base_url() . 'admincreatenews');
            }
            
        }
    }


}



    

    


    






