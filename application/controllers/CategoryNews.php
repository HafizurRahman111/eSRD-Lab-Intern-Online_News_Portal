

 <!----------------------  Category News Controller Page ---------------------->
 


<?php

  defined('BASEPATH') or exit('No direct script access allowed');

  
 class CategoryNews extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('NewsCategoryModel', 'newscategory');
		    $this->load->model('SessionModel', 'sesMod');
         
    }

   
         public function index()
       {  

           $newscategory = $_GET['newscategory'];

           $news_cat =  substr($newscategory,1,-1) ;
           
           $data['page_title'] = $news_cat;
           $data['page'] = "news_category";
           $this->load->view('_Layout/home/master.php', $data);

       }
       

        public function show_category_news($newscategory)
       {
           $data= $this->NewsCategoryModel->get_category_news($newscategory);
           
           $this->load->view('news_category', $data);
   
       }
    

    
    }

     
    
    ?>





  






   














