<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminUserInfo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminUserInfoModel', 'adminuserinfo');
		  $this->load->model('SessionModel', 'sesMod');
    }


	 public function index()
	{
		if (!$this->session->logged_in) 
        {
			redirect(base_url() . 'adminlogin');
		}

		$data['page_title'] = "User Info List";
		$data['page'] = "user/admin_user_info_view";
		
		$this->load->view('_Layout/home/master.php', $data);
        
	}


    public function show_details_user($id)
    {
        
        $data= $this->AdminUserInfoModel->get_details_user($id);
        
        $this->load->view('admin_control_user_view', $data);

 
    }



    function fetch()
    {
        $output = '';
        $query = '';

        $this->load->model('AdminUserInfoModel');

         if($this->input->post('query'))
        {
          $query = $this->input->post('query');
        }


           $data = $this->AdminUserInfoModel->fetch_data($query);


             $output .= '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                <tr>
                                <tr>
                                <th style="font-size: 15px;">No.</th>
                                <th style="font-size: 15px;">User ID</th>
                                <th style="font-size: 15px;">Name</th>
                                
                       
                                <th style="font-size: 15px;">E-mail</th>
                               
                                <th style="font-size: 15px;">Address</th>
                                <th style="font-size: 15px;">Gender</th>
                       
                                <th style="font-size: 15px;">Registration Date</th>
                                <th style="font-size: 15px;">Status</th>
                                
                               </tr>
                       
                               <tr>
                                <th style="font-size: 15px;"></th>
                                <th style="font-size: 15px;"></th>
                                <th style="font-size: 15px;">Username</th>
                                <th style="font-size: 15px;">Phone</th>
                                <th style="font-size: 15px;"></th>
                                <th style="font-size: 15px;"></th>
                                <th style="font-size: 15px;"></th>
                                <th style="font-size: 15px;"></th>
                       
                               </tr>
                               
                                
                                </tr> 
                          ';


                 if($data->num_rows() > 0)
                {

                 foreach($data->result() as $row)
                {
                        
                    $output .= '
                       <tr>

                       <td> </td>
                       <td> '.$row->user_id.' </td>
                        <td >  <b>  '.$row->name.' </b> </td>

                       
                        <td>'.$row->email.'</td>

                        <td>'.$row->address.'</td>
                        <td>'.$row->gender.'</td>

                        <td>'.$row->udate.'</td>
                        <td>'.$row->u_status.'</td>


                      <tr />


                      <tr>
                       <td> </td>
                       <td> </td>
                        <td> <a href="admincontroluser?id='.$row->user_id.'" style="color:green; text-decoration: none; "> 
                        <b>  '.$row->uname.' </b> </a> </td>
                        <td>'.$row->phone.'</td>
                       <td> </td>
                       <td> </td>
                       <td> </td>
                       <td> </td>

                      </tr>

                    
                    '; 
                
                }


                }


             else
            {
                    $output .= '<tr>
                        <td colspan="5">No Data Found</td>
                        </tr>';

            }

            $output .= '</table>';
            echo $output;

         }

     }
            

 
 
 
 





    

