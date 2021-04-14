

  <!----------------------  News Deatils View Page ---------------------->

<!DOCTYPE html>
<html>

  <head>

  </head>


 <body>

  <section id="contentSection">
    <div class="row">

      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">

          <div class="single_page">


     <?php

        $id  = $_GET['id'];  


        $rqur = $this->db->query("SELECT * FROM news WHERE n_id=$id" );
        $res = $rqur->result_array();

       //  var_dump($res);

        $this->db->select('*');
        $this->db->from('news');

        //   print  $id  ;

       foreach ($res as $r ) 
      {?>
  
            <ol class="breadcrumb">
              <li><a href="<?= base_url() ?>">Home</a></li>
              <li><a href="#"><b><?=$r['category'] ?></a></li>
            </ol>

            <h3><b><?=$r['n_title'] ?></b></h3>

            <div class="post_commentbox">

              <span>
                <i class="fa fa-user"style="font-size:20px ;"></i> <?=$r['author'] ?> &emsp;
                <i class="fa fa-calendar" style="font-size:20px;"></i> <?= substr($r['date_pub'], 0, 16) ?>  &emsp;
                <i class="fa fa-eye" style="font-size:20px;"></i> <?=$r['time_visited'] ?> 
              </span> 

           </div>


            <div class="single_page_content"> <img src="assets/uploads/<?= $r['file']?>" alt="Picture Not Found" />
                <p><?=$r['description'] ?> </p>
            </div>


            <br />

      <?php

      }


     ?>


            <div class="social_link">
                <ul class="sociallink_nav">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                    <br />
                    <hr />

                </ul>
            </div>
           
     
         <div class="related_post">

       
         
			<?php

				  	if ($this->session->userdata('logged_in')) 
          {?>

             <h4>Comment Here <i class='fa fa-edit'></i></h4>

              <form action="<?= base_url(); ?>newsdetails/comment" method="post">


              <input type="hidden" name="comid" value="<?= $d= $this->input->get('id'); ?>"> 

               <textarea class='form-control' cols='30' rows='3' name ="news_comment" placeholder='Write your comment'></textarea> <br/>
               <button class='btn default-btn'>Submit  </button>




             <?php


             }


             else 
            {
              echo'  <h4>Comment Here <i class="fa fa-edit"></i></h4>
                     <i class="fa fa-alert"></i><h5 style="color:red"> You Are Able to Comment in This Post After Logging In to Your Account. <a href="' . base_url('/login') . '"> <b style="color:green"> Click Here to Log In  </b></h5></a>';
             }
                
           


        ?>


         

					

				

			
         </div>


          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">

            <h2><span>Recent News</span></h2>

            <ul class="spost_nav">
              
            <?php

                $dbgetqr = $this->db->query("SELECT * FROM news " );
                $res_db = $dbgetqr->result_array();

                $this->db->order_by('date_pub', 'DESC'); 
                $this->db->limit(4 , 0);
                $join_q = $this->db->get()->result_array();


                foreach ($join_q as $m ) 
                {?>


                <li>
                  <div class="media wow fadeInDown"> <a href='newsdetails?id="<?=$m['n_id'] ?>"' class="media-left" > <img src="assets/uploads/<?php echo $m['file'];?>" alt="Not Found" class="img-responsive"/>  </a>
                  <div class="media-body"> <a href='newsdetails?id="<?=$m['n_id'] ?>"' class="catg_title"> <?=$m['n_title'] ?>  </a> </div> <br />
                  </div>
                </li>


          <?php

          }

          ?>

             
            </ul>
          </div>


          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
             
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>

            <div class="tab-content">
             

              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    
                </ul>
              </div>
            </div>
          </div>


          <div class="single_sidebar wow fadeInDown">
            <h2><span>Ads</span></h2>
            <a class="sideAdd" href="#"><img src="../images/add_img.jpg" alt=""></a> 
          </div>
         
        


        </aside>
      </div>
    </div>
  </section>
 

    <script src="../assets/js/jquery.min.js"></script> 
    <script src="../assets/js/wow.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script> 
    <script src="../assets/js/slick.min.js"></script> 
    <script src="../assets/js/jquery.li-scroller.1.0.js"></script> 
    <script src="../assets/js/jquery.newsTicker.min.js"></script> 
    <script src="../assets/js/jquery.fancybox.pack.js"></script> 
    <script src="../assets/js/custom.js"></script>


 </body>
</html>



















   

           



