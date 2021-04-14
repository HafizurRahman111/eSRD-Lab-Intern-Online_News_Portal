
 <!------------------ Message Controller Page ------------------>


<?php

defined('BASEPATH') or exit('No direct script access allowed');

 class Message extends CI_Controller
{

	 public function __construct() 
    {
        parent::__construct();

        $this->load->model('MessageModel', 'message');
		  $this->load->model('SessionModel', 'sesMod');

    }

  
	 public function index()
	{

		$data['page_title'] = "Message";
		$data['page'] = "message_view";

        $this->load->view('_Layout/home/master.php', $data);
		
    }

     
     public function som($mid)
    {
        
        $data= $this->ProfileModel->gom($mid);
        
        $this->load->view('message', $data);

 
    }


     public function storem()
    {
        
        $insert = $this->message->add_msg($this->input->post());

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




    function fetch()
    {
        $output = '';
        $query = '';

        $this->load->model('MessageModel');

         if($this->input->post('query'))
        {
          $query = $this->input->post('query');
        }


           $data = $this->MessageModel->fetch_data($query);
           
           


             $output .= '
             
  
              
                          ';




                 if($data->num_rows() > 0)
                {

                 foreach($data->result() as $row)
                {
                      
                    $n = $row->chat_time;
                    $c_n = $row->chat_text ;
              
                    
                    $output .= '


                    <div class="chat_list">

                    <a href="message?mid='.$row->sender_id. '">
         
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
                        </div>
                        <div class="chat_ib">
         
                          <h5>'.$row->sender_uname.' <span class="chat_date"> <br /> <h6> '. substr($n,11,18).' &ensp; | &ensp; '. substr($n,0,11).'  </h6>   </span></h5>
                          <br />  <p>  '. substr($c_n,0,30).'  </p>
         
                        </div>
                    </div>
         
                    </a>
                    <hr />
         
                  </div>

                    
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
