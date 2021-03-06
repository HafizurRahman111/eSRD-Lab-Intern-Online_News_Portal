
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
    




  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">


          <?php


            $this->db->select('*');
            $this->db->from('news');
            $this->db->order_by('n_id', 'DESC'); 
            $this->db->limit(5 , 0);
            $join_query = $this->db->get()->result_array();


            foreach ($join_query as $row ) 
            {?>

            

          <div class="single_iteam"> <a href='newsdetails?id="<?=$row['n_id'] ?>"'> <img src="images/slider_img4.jpg" alt=""></a>
          <div class="slider_article">
              <h2><a class="slider_tittle" href='newsdetails?id="<?=$row['n_id'] ?>"'><?=$row['n_title'] ?> </a></h2>
              <p><?=$row['short_des'] ?></p>
            </div>
          </div>




            <?php

            }

            ?>



          
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">


          <h2><span>Recent News</span></h2>

          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">


       <?php


              $this->db->select('*');
              $this->db->from('news');
              $this->db->order_by('n_id', 'DESC'); 
              $this->db->limit(5 , 0);
              $join_query = $this->db->get()->result_array();


            foreach ($join_query as $row ) 
          {?>

           <li>
                 <div class="media">  <a href='newsdetails?id="<?=$row['n_id'] ?>"'  class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body">  <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="catg_title"> <?=$row['n_title'] ?> </a> </div>
                </div>
           </li>

          
       <?php

     }

   ?>
             


            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="contentSection">
    <div class="row">

      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">

            <h2><span>International</span></h2>

            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">



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


                <li>
                  <figure class="bsbig_fig">  <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="featured_img"> <img alt="" src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href='newsdetails?id="<?=$row['n_id'] ?>"'> <?=$row['n_title'] ?> </a> </figcaption>
                    <p><a href='newsdetails?id="<?=$row['n_id'] ?>"'> <?=$row['short_des'] ?>  </p>
                  </figure>
                </li>



        <?php

  }

  ?>



              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">

              
         <?php
           
           $cat="International" ;

                          $this->db->select('*');
                          $this->db->from('news');
                          $this->db->where('category', $cat); 
                          $this->db->order_by('date_pub', 'DESC'); 
                          $this->db->limit(4 , 1);
                          $join_query = $this->db->get()->result_array();


             foreach ($join_query as $row ) 
           {?>

     
          <li>
           <div class="media wow fadeInDown"> <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="media-left" > <img alt=""src="images/post_img1.jpg"> </a>
             <div class="media-body"> <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="catg_title"> <?=$row['n_title'] ?>  </a> </div> <br />
           </div>
          </li>


        <?php

      }

      ?>


                
              </ul>
            </div>
          </div>



   <!------------------------- Technology Part ---------------------->

          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">

                <h2><span>Technology</span></h2>

                <ul class="business_catgnav wow fadeInDown">

         <?php

           // -----------  Big Photo Card     --------------

              $cat="Technology" ;

                            $this->db->select('*');
                            $this->db->from('news');
                            $this->db->where('category', $cat); 
                            $this->db->order_by('date_pub', 'DESC'); 
                            $this->db->limit(1 , 0);
                            $join_query = $this->db->get()->result_array();


                foreach ($join_query as $row ) 
              {?>

                    <li>
                      <figure class="bsbig_fig wow fadeInDown"> <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                        <figcaption> <a href='newsdetails?id="<?=$row['n_id'] ?>"'><?=$row['n_title'] ?> </a> </figcaption>
                        <p> <a href='newsdetails?id="<?=$row['n_id'] ?>"'> <?=$row['short_des'] ?> </p>
                      </figure>
                    </li>

                  <?php

              }

         ?>


        </ul>

        

        <ul class="spost_nav">

            <?php

            // ---------Small Cards --------

              $cat="Technology" ;

                            $this->db->select('*');
                            $this->db->from('news');
                            $this->db->where('category', $cat); 
                            $this->db->order_by('date_pub', 'DESC'); 
                            $this->db->limit(2 , 1);
                            $join_query = $this->db->get()->result_array();


                foreach ($join_query as $row ) 
              {?>

              <li>
                <div class="media wow fadeInDown"> <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="media-left" > <img alt=""src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href='newsdetails?id="<?=$row['n_id'] ?>"'class="catg_title"> <?=$row['n_title'] ?>  </a> </div> <br />
                </div>
              </li>


              <?php

              }

              ?>

           </ul>


          </div>
        </div>


            <div class="technology">
              <div class="single_post_content">
                <h2><span>Sports</span></h2>

                <ul class="business_catgnav">
          
           <?php

           // Big Photo Card
           
               $cat="Sports" ;

                          $this->db->select('*');
                          $this->db->from('news');
                          $this->db->where('category', $cat); 
                          $this->db->order_by('date_pub', 'DESC'); 
                          $this->db->limit(1 , 0);
                          $join_query = $this->db->get()->result_array();


             foreach ($join_query as $row ) 
           {?>


                 <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href='newsdetails?id="<?=$row['n_id'] ?>"'><?=$row['n_title'] ?> </a> </figcaption>
                      <p> <a href='newsdetails?id="<?=$row['n_id'] ?>"'> <?=$row['short_des'] ?> </p>
                    </figure>
                  </li>
               
                

                <?php

            }

          ?>

      </ul>

      <ul class="spost_nav">

       <?php
           
           $cat="Sports" ;

                          $this->db->select('*');
                          $this->db->from('news');
                          $this->db->where('category', $cat); 
                          $this->db->order_by('date_pub', 'DESC'); 
                          $this->db->limit(2 , 1);
                          $join_query = $this->db->get()->result_array();


             foreach ($join_query as $row ) 
           {?>


              
          <li>
           <div class="media wow fadeInDown"> <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="media-left" > <img alt=""src="images/post_img1.jpg"> </a>
             <div class="media-body"> <a href='newsdetails?id="<?=$row['n_id'] ?>"'class="catg_title"> <?=$row['n_title'] ?>  </a> </div> <br />
           </div>
          </li>


        <?php

      }

      ?>


            
         </ul>


              </div>
            </div>
          </div>


          

          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">

              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>

              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>

              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>

             
            </ul>
          </div>

          



        </div>
      </div>



      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular News</span></h2>

            <ul class="spost_nav">




            <?php
           
          

                          $this->db->select('*');
                          $this->db->from('news');
                          $this->db->order_by('time_visited', 'DESC'); 
                          $this->db->limit(4 , 0);
                          $join_query = $this->db->get()->result_array();


             foreach ($join_query as $row ) 
           {?>


          <li>
             <div class="media wow fadeInDown">  <a href='newsdetails?id="<?=$row['n_id'] ?>"' class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
             <div class="media-body"><a href='newsdetails?id="<?=$row['n_id'] ?>"' class="catg_title"> <?=$row['n_title'] ?>  </a> </div>
             </div>
          </li>
              

        <?php

      }

      ?>


            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
             
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Bangladesh</a></li>
                  <li class="cat-item"><a href="#">International</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Education</a></li>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>

             
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Ads</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
         
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>

              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Comment Policy</a></li>
              <li><a href="#">Advertisement</a></li>

            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>


 