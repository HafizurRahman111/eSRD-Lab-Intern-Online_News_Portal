 
 
  <!----------------------  News Search Controller Page ---------------------->
 
 
 <?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class LiveSearch extends CI_Controller 
 {

     public function __construct()
    {
        parent::__construct();

        $this->load->model('LiveSearchModel', 'livesearch');
		     $this->load->model('SessionModel', 'sesMod');

    }


      public function index()
     {
         $data['page_title'] = "News Search";
         $data['page'] = "news_search";
                
         $this->load->view('_Layout/home/master.php', $data);
                
     }


     // fetch data from the table 'news' 

     function fetch()
    {
        $output = '';
        $query = '';

        $this->load->model('LiveSearchModel');

         if($this->input->post('query'))
        {
          $query = $this->input->post('query');
        }


           $data = $this->LiveSearchModel->fetch_data($query);


             $output .= '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                <tr>
                                <th>News Title</th>
                                <th>Short Description</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Date of Publication</th>
                                <th>Photo</th>
                               
                                
                                </tr>   
                          ';


                 if($data->num_rows() > 0)
                {

                 foreach($data->result() as $row)
                {
                        
                    $output .= '
                       <tr>
                        <td > 
                         <a href="newsdetails?id='.$row->n_id.'" style="color:green; text-decoration: none; "> 
                           <b>  '.$row->n_title.' </b> </a> 
                        </td>

                        <td>'.$row->short_des.'</td>
                        <td>'.$row->author.'</td>
                        <td>'.$row->category.'</td>
                        <td>'.$row->date_pub.'</td>
                        <td>  <img src="assets/uploads/'.$row->file.'" style="height:100px; width:100px;" class="responsive" alt="profile-image"/> </td>
                    
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
            

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 