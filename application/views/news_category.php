

 <!----------------------  News category View Page ---------------------->

 <!DOCTYPE html>
  <html>

   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="<?=base_url(); ?>assets/css/news_home_design.css" rel="stylesheet" />
    <script src="<?=base_url(); ?>assets/js/news_home_js.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


  <head>
 
  <style>
  

            * {
                box-sizing: border-box;
              }

            body {
                    font-family: Arial, Helvetica, sans-serif;
                  }

          /* Float four columns side by side */
            .column {
                      float: right;
                      width: 33.33%;
                      padding: 10px 20px 40px 25px;
              
                   }
                   

          /* Remove extra left and right margins, due to padding */
          .row {margin: 0 40px;}

          /* Clear floats after the columns */
          .row:after {
            content: "";
            display: table;
            clear: both;
          }

          /* Responsive columns */
          @media screen and (max-width: 600px) {
            .column {
              width: 90%;
              display: block;
              margin-bottom: 50px;
            }
          }

          /* Style the counter cards */
          .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            background-color: #f1f1f1;
            padding-left: -10px;
          }


         
    </style>

    </head>

    <body>
  

    <section id="contentSection">

          
           <?php

              $newscategory = $_GET['newscategory'];

              $rqur = $this->db->query("SELECT * FROM news WHERE category=$newscategory" );
              $res = $rqur->result_array();
            
              $this->db->select('*');
              $this->db->from('news');

              echo "<hr /> <h2 style='text-align:center'><span>" . substr($newscategory,1,-1). "</span></h2> <hr />";
          

             foreach ($res as $row ) 
           {?>

                  <div class='column'>
                    <div class='card' style="width:300px;height:300px;">
                        <h3><?=$row['n_title'] ?></h3>
                        <hr />

                        <p style="text-color:green;"> <a style="color:green;" href='newsdetails?id="<?=$row['n_id'] ?>"'> <?=$row['short_des'] ?> <br/> </a> </p>

                        <hr />
                          
                    </div>
                  </div>
                          
                      
                <?php

            }

          ?>

    
 
    </section>
      

      </body>

    </html>
      
      
      
      
      
      
      
      
      
      
      
      