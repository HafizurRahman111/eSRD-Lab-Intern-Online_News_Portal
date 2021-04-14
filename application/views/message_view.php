

<!-------------------------- Message View Page --------------------->

<!DOCTYPE html>
 <html>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="<?=base_url()?>assets/css/profile_design.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/css/messaging.css" rel="stylesheet" />

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

   <head>

    <style>
     

    .contact_area{
                  background-color: #f1f1f1;
              }


    .team-section{
                    overflow: hidden;
                    background-color: #f1f1f1;
                    padding: 20px;
                }

    .border{
              display: block;
              margin: auto;
              width: 600px;
              height: 5px;
              background: #3498db;
              margin-bottom: 20px;
        }


   .section{
              width: 600px;
              margin: auto;
              font-size:20px;
              color: black;
              text-align: justify;
              margin-bottom: 35px;
           }

    .section:target {
                      height: auto;	
                    }


            .table {
                      height:200px;
                    }


     .button-block {
                      display:block;
                      width:20%;
                   }

      .button_login {

                        border:0;
                        outline:none;
                        border-radius:0;
                        padding:15px 0;
                        font-size:14px;

                        text-transform:uppercase;
                        letter-spacing:.1em;
                        background:rgb(64, 139, 253);
                        color:white;

                   }


          .center {
                      align-items: center;
                      height: 150px;
				
	                  }


		     	*{
              margin: 0;
              padding: 0;
              font-family: Arial, Helvetica, sans-serif;
		     	}


	 .team-section{
                  overflow: hidden;
                  text-align: center;
                  background-color: #f1f1f1;
                  padding: 20px;
			         }


	.team-section h1{
                    margin-bottom: 20px;
                    color: black;
                    font-size: 30px;
			            }

		.border{
              display: block;
              margin: auto;
              width: 600px;
              height: 5px;
              background: #3498db;
              margin-bottom: 20px;
		        }

		.ps{
			      margin-bottom: 30px;
		     }

		.ps a {
            display: inline-block;
            margin: 20px;
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 50%
		     }

		.ps a img{
                width: 100%;
                filter: none;
                transition: 0.4s all;
		        }

		.ps a:hover > img{
					             filter: none;
	                	}

		.section{
              width: 600px;
              margin: auto;
              font-size:20px;
              color: black;
              text-align: justify;
              margin-bottom: 35px;
		        }

		.section:target {
			                height: auto;	
		               }

		.name{
            display: block;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;

		    }


    </style>
  

  </head>

  
   <body>

   <section id="contentSection">
   
    <br />
    <div class="team-section">

    <div class="contact_area">
	   <h2 align="center" >Messaging</h2>
	    <br></br>
	
       <!------------------------ Message --------------------------->

        <div class="tab-pane" id="message">


        <div class="container12">

        <div class="messaging">
         <div class="inbox_msg">

          <div class="inbox_people">

           <div class="inbox_chat">   <!----- Inbox Chat Start -------->
            <br />
  
            <div class="px-4 d-none d-md-block">
              <div class="d-flex align-items-center">
              <div class="flex-grow-1">
                <input type="text" name="search_text" id="search_text" class="form-control my-3" placeholder="Search...">
                 
               

              </div>
              </div>
            </div>

            <div id="result"></div>

         <div style="clear:both"></div>


    </div>     <!----- Inbox Chat End-------->
   </div>    <!----- Inbox People -------->


   <div class="mesgs">
    <div class="msg_history">


    <?php
              
        $a = $this->session->userid;
        $mid = $_GET['mid'];  

        $rqur = $this->db->query("SELECT * FROM chat  WHERE (sender_id = $a AND receiver_id =  $mid ) OR (sender_id =  $mid  AND receiver_id =  $a) ORDER BY chat_time ASC " );

      //   $rqur = $this->db->query("SELECT * FROM chat WHERE receiver_id=$a OR sender_id=$a ORDER BY chat_time" );

        $res = $rqur->result_array();

        $this->db->select('*');
        $this->db->from('chat');
            
          
         foreach ($res as $d) 
        {
            $n = $d['chat_time'] ;

            $rid = $d['receiver_id'] ;
            $sendid = $d['sender_id'] ;


              if ( $a ==  $rid )
            {
                 echo' 
                      <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
                        </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">

                              <p> ' . $d['chat_text'] . ' </p>
                              
                              <span class="time_date">  '. substr($n,11,18).' &ensp; | &ensp; '. substr($n,0,11).' </span> 

                          </div>
                        </div>
                    </div>
                  ';

              }


               else if ( $a == $sendid )
              {

                  echo '   
                       <div class="outgoing_msg">
                         <div class="sent_msg">

                            <p> ' . $d['chat_text'] . ' </p>

                            <span class="time_date">
                               '. substr($n,11,18).' &ensp; | &ensp; '. substr($n,0,11).' 
                            </span> 

                         </div>
                       </div>
                       
                    ';
                 
              }

               
          }
  
                
      ?>
   

      <br />
     <br />


        <form action="<?= base_url(); ?>message/storem" method="post">

          <div class="type_msg">
          <div class="input_msg_write">

              <input type="text" class="write_msg" name="chat_text" placeholder="Type a message" />
              <input type="hidden" name="msg_id" value="<?= $mid= $_GET['mid'] ?> "> 

            <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
          </div>
          </div>

       </form>  

       <hr/>

       </div> 

    </div> 


   </div>  <!--- Inbox Message --->

  </div>   <!--- Messaging --->

 </div>

</div>

    
	      </div>
	     </div>

      <br/>
      
     </section>


     <script>

        $(document).ready(function()
      {

        load_data();

        function load_data(query)
      {
            $.ajax({
            url:"<?php echo base_url(); ?>message/fetch",
            method:"POST",
            data:{query:query},
              success:function(data)
            {
            $('#result').html(data);
            }

      })
      }

      $('#search_text').keyup(function()
      {
        var search = $(this).val();

        if(search != '')
        {
          load_data(search);
        }

        else
      {
          load_data();
      }

      });

      });


 </script>




    </body>
  </html>
  

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 