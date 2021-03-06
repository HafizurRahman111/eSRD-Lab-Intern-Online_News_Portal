

<!DOCTYPE html>
<html lang="en">

<head>
	
	
<title><?= $page_title ?></title>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    

	<style>

		.fa:hover {
		opacity: 0.6;
		}


		.fa-facebook {
		background: #3B5998;
		color: white;
		}


		.fa-twitter {
		background: #55ACEE;
		color: white;
		}

		.fa-linkedin {
		background: #007bb5;
		color: white;
		}

		.fa-youtube {
		background: #bb0000;
		color: white;
		}





    .dropdown {
               position: relative;
               display: inline-block;
              }

   .dropdown-content {
                        display:none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 250px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                        
                      }

     

      .dropdown .dropbtn {
                            font-size: 16px;  
                            border: none;
                            outline: none;
                            color: white;
                            padding: 14px 16px;
                            background-color: inherit;
                            font-family: inherit;
                            margin: 0;
                      }

      .navbar a:hover, .dropdown:hover .dropbtn {
                             background-color: red;
                        }



      .dropdown-content a {
                            float: none;
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                            text-align: left;
                        }

        .dropdown-content a:hover {
                                   background-color: #ddd;
                              }

.dropdown:hover .dropdown-content {
  display: block;
}

 </style>


      <script>

           function display_ct5() 
          {
              var x = new Date()
              var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

              var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
              x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
              document.getElementById('ct5').innerHTML = x1;
              display_c5();
          }

           function display_c5()
          {
              var refresh=1000; // Refresh rate in milli seconds
              mytime=setTimeout('display_ct5()',refresh)
          }

          display_c5()

     </script>



</head>


<body onload="start_timer()" onbeforeunload="set_active_time()">



<div id="preloader">
  <div id="status">&nbsp;</div>
</div>


<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">

              <li><a href="<?= base_url() ?>">Home</a></li>

              <li><a href="   <?= base_url('/about') ?>">About</a></li>
              
              <li><a href="   <?= base_url('/contact') ?>">Contact</a></li>
            </ul>
         

          </div>

          
          <div class="header_top_right">
              <ul class="top_nav1">
                <li> 
                
                <span id='ct5' style="background-color: white"></span>
             </li>


              <li >
               
					<?php
					if (!$this->session->userdata('logged_in')) {
						echo '<a href="' . base_url('/register') . '" > <i class="fa fa-user-plus"></i> Register</a>';
					}
					?>
				</li>

               

          <li >
					<?php
					if (!$this->session->userdata('logged_in')) {
						echo '<a href="' . base_url('/login') . '"><i class="fa fa-user"></i> Login</a>';
					}
					else {
						echo '<a href="' . base_url('login/logout') . '"> Logout</a>';
					}
					?>
				</li>


              </ul>



              
          </div>

        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="##" class="logo"><img src="images/logo.png" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner.jpg" alt=""></a></div>
        </div>
      </div>
    </div>


  </header>

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">


        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="<?= base_url() ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>



  <!-------------------      Bangladesh    ------------------>
        
      <?php

               $cat="Bangladesh" ;

                $this->db->select('*');
                $this->db->from('news');
                $this->db->where('category', $cat); 
                $this->db->order_by('date_pub', 'DESC'); 
                $this->db->limit(1 , 0);
                $join_query = $this->db->get()->result_array();


                 foreach ($join_query as $row ) 
               {?>

                  <li> <a href='categorynews?newscategory="<?=$row['category'] ?>"'>Bangladesh</a></li>

           <?php

               }

       ?>


      <!-------------------      International    ------------------>

   <?php


        $cat="International" ;

        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('category', $cat); 
        $this->db->order_by('date_pub', 'DESC'); 
        $this->db->limit(1 , 0);
        $join_query = $this->db->get()->result_array();


          foreach ($join_query as $row ) 
      {?>

     <li> <a href='categorynews?newscategory="<?=$row['category'] ?>"'>International</a></li>

  
    <?php

   }

   ?>


    <!-------------------    Business ------------------>

    <?php


          $cat="Business" ;

          $this->db->select('*');
          $this->db->from('news');
          $this->db->where('category', $cat); 
          $this->db->order_by('date_pub', 'DESC'); 
          $this->db->limit(1 , 0);
          $join_query = $this->db->get()->result_array();


            foreach ($join_query as $row ) 
          {?>

          <li> <a href='categorynews?newscategory="<?=$row['category'] ?>"'>Business</a></li>


       <?php

       }

     ?>

            
     <!-------------------      Technology    ------------------>


    <?php

            $cat="Technology" ;

            $this->db->select('*');
            $this->db->from('news');
            $this->db->where('category', $cat); 
            $this->db->order_by('date_pub', 'DESC'); 
            $this->db->limit(1 , 0);
            $join_query = $this->db->get()->result_array();


              foreach ($join_query as $row ) 
            {?>

            <li> <a href='categorynews?newscategory="<?=$row['category'] ?>"'>Technology</a></li>


       <?php

        }

     ?>

  
  <!-------------------      Education    ------------------>


    <?php


          $cat="Education" ;

          $this->db->select('*');
          $this->db->from('news');
          $this->db->where('category', $cat); 
          $this->db->order_by('date_pub', 'DESC'); 
          $this->db->limit(1 , 0);
          $join_query = $this->db->get()->result_array();


            foreach ($join_query as $row ) 
          {?>

          <li> <a href='categorynews?newscategory="<?=$row['category'] ?>"'>Education</a></li>


      <?php

       }

     ?>


       <!-------------------     Sports    ------------------>


    <?php


            $cat="Sports" ;

            $this->db->select('*');
            $this->db->from('news');
            $this->db->where('category', $cat); 
            $this->db->order_by('date_pub', 'DESC'); 
            $this->db->limit(1 , 0);
            $join_query = $this->db->get()->result_array();


              foreach ($join_query as $row ) 
            {?>

            <li> <a href='categorynews?newscategory="<?=$row['category'] ?>"'>Sports</a></li>


       <?php

       }

    ?>


          <li><a href="#">Photography</a></li>

         
        </ul>


        <ul class="search_bar">
           <li ><a href=" <?= base_url('/livesearch') ?>" ><i class="fa fa-fw fa-search"></i> Search</a></li>
        </ul>

        
        <ul >

            <li > 

            <?php

                $n = $this->session->userdata("name");  

				      	if ( $this->session->userdata('logged_in') == TRUE ) 
                {
					       	echo '   <div class="dropdown">
                   <button class="dropbtn"> <a style="color:green;"><b> '.$n.' </b> </a> <i class="fa fa-caret-down"></i> </button>
     
                     <div class="dropdown-content">
                       <a href="profile"><i class="fa fa-user"></i>  <b> '. substr($n, 0, strpos($n, ' ')).' Profile </b> </a> 
                       <a href="mycomments"><i class="fa fa-comment"></i>  <b> My Comments </b> </a>
                       <a href="savednews"><i class="fa fa-save"> </i>  <b> News Saved </b> </a>
                       <a href="newssend"><i class="fa fa-send-o"> </i>  <b> Send News </b> </a>
                      
                     </div>
                   </div>   ';
					      }

				   	else {
						         echo ' ';
				       	}

					  ?>

            </li>

        </ul>
       




      </div>
    </nav>
        </section>


    <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">


      <?php


            $this->db->select('*');
            $this->db->from('news');
            $this->db->order_by('n_id', 'DESC'); 
            $this->db->limit(10 , 0);
            $join_query = $this->db->get()->result_array();


           foreach ( $join_query as $row ) 
          {?>

              <li>  <a style="text-decoration: none;" href='newsdetails?id="<?=$row['n_id'] ?>"'> <i class="fa fa-newspaper-o" > </i> <?=$row['n_title'] ?> </a> </li>

        <?php

         }

       ?>
           
          </ul>


          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>




		<script src="assets/js/jquery.min.js"></script> 
		<script src="assets/js/wow.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script> 
		<script src="assets/js/slick.min.js"></script> 
		<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
		<script src="assets/js/jquery.newsTicker.min.js"></script> 
		<script src="assets/js/jquery.fancybox.pack.js"></script> 
		<script src="assets/js/custom.js"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>


</body>
</html>