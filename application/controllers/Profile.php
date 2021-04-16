
  <!----------------------  My Profile Controller Page Complete ---------------------->


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


    // Profile Edit Complete

     public function edit_profile()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        
      
         if (!$this->form_validation->run()) 
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'profile');

        } 

         else 
        {


            $uid = $this->session->userid;

            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
          
          
            $data = array('name' => $name, 'phone' => $phone, 'address' => $address );

            $insert_updata = $this->profile->update_data($data);

        
            if ($insert_updata) 
           {
              
               $this->session->set_flashdata('msg', 'Congratulation ! Profile Updated Successfully');
               $this->session->logged_in = false ;
               redirect(base_url() . 'login');
               
           }
            
            else 
            {
     
                $this->session->set_flashdata('msg', 'Error, Try Again');
                redirect(base_url() . 'profile');
                
            }
  

            
        }


    }


    // Password Change Complete

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

             $old_pass = md5($this->input->post('old_pass'));
             $pass = md5($this->input->post('new_pass'));

             $data = array('password' => $pass);


            $uid = $this->session->userid;

            $this->db->select('*');
            $this->db->from('user_infos');
            $this->db->where('user_id',$uid );
            $this->db->where('password', $old_pass);
           

            $que = $this->db->update('user_infos', $data) ;
            

            if ($que ) 
           {

                $this->session->set_flashdata('msg', 'Congratulation ! Password Changed Successfully');
                $this->session->logged_in = false ;

                redirect(base_url() . 'login');
                return $user_id;

           }
   
         
            else 
            {
                $this->session->set_flashdata('msg', 'Error, Try Again. Your Current Password is Wrong');
                redirect(base_url() . 'profile');
            }



            
        }
    }

   


   // Photo Change Complete 


     public function change_photo()
    {
 
        $id = $this->session->userid;
 
       $target_dir = "assets/user_pic/";
       $target_file = $target_dir . time().basename($_FILES["file"]["name"]);
       $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
       $imgName = time().basename($_FILES["file"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
         
 
       $data = [
                 'file' =>$imgName

       ]; 
                     
            

         $insert_d = $this->profile->insert_photo($data);

        
          if ($insert_d) 
         {
            
             $this->session->set_flashdata('msg', 'Congratulation ! Successful');
             redirect(base_url() . 'welcome');
             
         }
          
          else 
          {
   
              $this->session->set_flashdata('msg', 'Error, Try Again');
              redirect(base_url() . 'profile');
              
          }


 
     
 
     }
 
 
 
    



}
