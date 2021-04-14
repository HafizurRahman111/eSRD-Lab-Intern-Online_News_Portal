
    
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


   <!--- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">   --------->

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

        


    </style>


    <body>

   <br />

   <section id="contentSection">

    <br />
     <div class="team-section">

      <div class="container">

        <div class="row">
         <div class="col-lg-4 col-xl-4">

          <div class="card-box text-center">

            <h3 style="color:red;"> Admin Profile  </h3>
             <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">
              <br/>  
              <br/>  
              
              
              <h4 class="mb-0"> <?= $this->session->userdata('a_name') ?> </h4> 
              <p class="text-muted">@ <?= $this->session->userdata('a_name') ?></p>
              
                    
              

      <?php
                
            $a = $this->session->userid;
              
            $rqur = $this->db->query("SELECT * FROM admin_infos WHERE a_id=$a " );
            $res = $rqur->result_array();
    
            $this->db->select('*');
            $this->db->from('admin_infos');
          
        
           foreach ($res as $d) 
         {
              

              echo' 
                  
              <div class="text-left mt-3">
                 <p  class="text-muted mb-2 font-13"> <b> <i class="fa fa-id-card fa-fw w3-margin-right w3-large w3-text-teal"> </i> User ID : </b> <span class="ml-2 "> ' . $d['a_id'] . ' </span></p>
                <hr />
                  <p class="text-muted mb-2 font-13"> <b> <i class="fa fa-mobile fa-fw w3-margin-right w3-large w3-text-teal"> </i> Phone : </b> <span class="ml-2 ">' . $d['a_phone'] . ' </span></p>
                  <p class="text-muted mb-1 font-13"> <b> <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"> </i> E-mail : </b> <span class="ml-2"> ' . $d['a_email'] . ' </span></p>
              </div>
                <hr />
  
             </div> 
             
             
             <div class="card-box">
             <div class="w3-white">
 
              <button onclick=myFunction("Demo1") class="w3-button w3-block w3-theme-l1 w3-left-align w3-hover-white">
               <i class="fa fa-info-circle fa-fw w3-margin-right"></i> More Info</button>
 
                <div id="Demo1" class="w3-hide w3-container">
 
                 <hr />
                 <p class="text-muted mb-2 font-13"> <b> <i class="fa fa fa-venus-mars fa-fw w3-margin-right w3-large w3-text-teal"></i> Gender : </b> <span class="ml-2">  </span></p>
                 <p class="text-muted mb-2 font-13"> <b> <i class="fa fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-teal"></i> Birthday : </b> <span class="ml-2">   </span></p>
                 <p class="text-muted mb-2 font-13"> <b> <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i> Address : </b> <span class="ml-2">   </span></p>
 
                 <p class="text-muted mb-2 font-13"> <b> <i class="fa fa fa-registered fa-fw w3-margin-right w3-large w3-text-teal"></i> Registration Date : </b> <span class="ml-2"> ' . $d['a_reg'] . ' </span></p>
                 <p class="text-muted mb-2 font-13"> <b> <i class="fa fa-check-circle fa-fw w3-margin-right w3-large w3-text-teal"> </i> Account Status : </b> <span class="ml-2">  ' . $d['a_status'] . ' </span></p>
                 <br />
 
                </div>
 
             </div>
           </div>      
 
 
         </div> 
  
               ';
               
             
        }

              
    ?>

      
        <div class="col-lg-7 col-xl-7">
          <div class="card-box">

            <ul class="nav nav-pills navtab-bg">

            <li class="nav-item">
                 <a href="#profilehome" data-toggle="tab" aria-expanded="true" class="nav-link ml-0 active">
                     <i class="mdi mdi-face-profile mr-1"></i> <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
                 </a>
             </li>

             <li class="nav-item">
                 <a href="#message" data-toggle="tab" aria-expanded="false" class="nav-link">
                     <i class="mdi mdi-face-profile mr-1"></i> <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                 </a>
             </li>


             <li class="nav-item">
                 <a href="#session" data-toggle="tab" aria-expanded="false" class="nav-link">
                     <i class="mdi mdi-face-profile mr-1"></i>Session Info
                 </a>
             </li>

             <li class="nav-item">
                 <a href="#editprofile" data-toggle="tab" aria-expanded="false" class="nav-link">
                     <i class="mdi mdi-settings-outline mr-1"></i>Edit Profile
                 </a>
             </li>


         </ul>


         <div class="tab-content">


    <!------------------------ Profile Home User Activity Info--------------------------->

          <div class="tab-pane show active" id="profilehome">
               
             <h3>My Activity Info</h3>
               
             <a style="color:green; text-align:right;" href="activity">
               <button class="button_login button-block"/>Click Here</button>
            </a>
            
            <hr />


            <h4>All User Info</h4> <br />


            <div class="table-responsive">

            <table class="table">
             <thead class="thead-light">

                <tr>
                <th style="font-size: 12px;">List Name</th>
                <th style="font-size: 12px;">List Page</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                <td style="font-size: 14px;"> <b> <h4> User Info List </h4> </b> </td>

                <td style="font-size: 20px;">    
                        <a style="color:green; text-align:center;" href="adminuserinfo">
                            <button type="button" class="btn btn-info" />See User Info</button>
                        </a>
                </td>
                
                </tr>


                <tr>
                <td style="font-size: 14px;"> <b>   <h4>User Session List</h4> </b> </td>

                <td style="font-size: 20px;">    
                        <a style="color:green; text-align:center;" href="activity">
                            <button type="button" class="btn btn-info" />Click Here</button>
                        </a>
                </td>
                
                </tr>

                <tr>
                <td style="font-size: 14px;"> <b>    <h4>User Activity List</h4> </b> </td>

                <td style="font-size: 20px;">    
                        <a style="color:green; text-align:center;" href="activity">
                            <button type="button" class="btn btn-info" />Click Here</button>
                        </a>
                </td>
                
                </tr>

   
            </tbody>
         </table>


       </div>


     <h4> News </h4> <br />

            <div class="table-responsive">

            <table class="table">
             <thead class="thead-light">

                <tr>
                <th style="font-size: 12px;">List Name</th>
                <th style="font-size: 12px;">List Page</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                 <td style="font-size: 14px;"> <b> <h4> Create New News Post </h4> </b> </td>

                 <td style="font-size: 20px;">    
                        <a style="color:green; text-align:center;" href="admincreatenews">
                            <button type="button" class="btn btn-success" />Click Here</button>
                        </a>
                 </td>
                
                </tr>


                <tr>
                <td style="font-size: 14px;"> <b>  <h4> Existing News List</h4> </b> </td>

                <td style="font-size: 20px;">    
                        <a style="color:green; text-align:center;" href="activity">
                            <button type="button" class="btn btn-info" />Click Here</button>
                        </a>
                </td>
                
                </tr>

               
   
            </tbody>
         </table>


       </div>









          
               
            


            
               
             
          
             
               
            
          


          </div>


    <!------------------------ Message --------------------------->

          <div class="tab-pane" id="message">

           <h3 class=" text-center">Messaging</h3>

            <hr/>

           <div class="container12">

            <div class="messaging">
              <div class="inbox_msg">

               <div class="inbox_people">

               <div class="inbox_chat">   <!----- Inbox Chat Start -------->
               
               <br />
               
               <div class="px-4 d-none d-md-block">
					    	<div class="d-flex align-items-center">
							  <div class="flex-grow-1">
								  <input type="text" class="form-control my-3" placeholder="Search...">
							  </div>
						   </div>
				    	</div>



          <?php
                
                $a = $this->session->userid;
                  
                $rqur = $this->db->query("SELECT * FROM chat WHERE receiver_id=$a GROUP BY (sender_id) ORDER BY (chat_time) DESC" );
                $res = $rqur->result_array();
        
                $this->db->select('*');
                $this->db->from('chat');
              
            
               foreach ($res as $d) 
             {
                 $n = $d['chat_time'] ;
                 $c_n = $d['chat_text'] ;

                 $pass_id = $d['sender_id'] ;

            
                  echo' 
                  
                        <div class="chat_list">

                        <a href="test?mid=', $pass_id ,'">

                        <div class="chat_people">
                          <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
                            </div>
                            <div class="chat_ib">

                              <h5> '.$d['sender_uname'].' <span class="chat_date"> <br /> <h6> '. substr($n,11,18).' &ensp; | &ensp; '. substr($n,0,11).'  </h6>   </span></h5>
                              <br />  <p>  '. substr($c_n,0,30).'  </p>

                            </div>
                        </div>

                        </a>
                        <hr />


                      </div>

                    ';

                 
            }
    
                  
        ?>
    




          </div>     <!----- Inbox Chat End-------->
          </div>    <!----- Inbox People -------->



          <div class="mesgs">
          <div class="msg_history">



        
       

          <?php
                
                $a = $this->session->userid;


             //   $mid = $_GET['$mid'];  

             //  echo $data;



               // $rqur = $this->db->query("SELECT * FROM chat   WHERE (sender_id = $a AND receiver_id =  '".receiver_id."') OR (sender_id =  '".sender_id."' AND receiver_id =  $a) ORDER BY chat_time DESC " );

                $rqur = $this->db->query("SELECT * FROM chat WHERE receiver_id=$a OR sender_id=$a ORDER BY chat_time" );


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


        <form action="<?= base_url(); ?>profile/store_messages" method="post">

            <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" name="chat_text" placeholder="Type a message" />
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
 

  

    <!-----------------------Session Info ------------------------->

    
             
          <div class="tab-pane" id="session">


            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i>
               User Session Info ( Latest 5 Info )</h5>

             <div class="table-responsive">

             <table class="table" style="width:150%">
                <thead class="thead-light"> 

                <tr>
                  <th rowspan="2" style="font-size: 15px;">ID</th>
                  <th style="font-size: 12px;">Session ID</th>
                  <th style="font-size: 12px;">IP Address   </th>
                  <th style="font-size: 12px;">Browser Name   </th> 
                </tr>

                <tr>
                  <th style="font-size: 12px;">Session Start Time   </th> 
                  <th style="font-size: 12px;">Operating System </th>
                  <th style="font-size: 12px;">Browser Version </th>
                </tr>

                </thead>
                
             <tbody>

    <?php
                
        $a = $this->session->userid;
                  
        $rqur = $this->db->query("SELECT * FROM user_session WHERE user_id=$a ORDER BY sid DESC LIMIT 5" );
                $res = $rqur->result_array();
        
               
          foreach ( $res as $us ) 
         {
          
            echo'  
                  <tr>
                    <td style="font-size: 14px;"><b> ' . $us['sid'] . ' </b> </td> 
                    <td style="font-size: 11px;"> ' . $us['session_id'] . '  </td>
                    <td style="font-size: 11px;"> ' . $us['ipaddress'] . '</td> 
                    <td style="font-size: 12px;"> ' . $us['browser'] . ' </td>   
                  </tr>

                  <tr>
                    <td ></td>
                    <td style="font-size: 12px;"> ' . $us['udate'] . ' </td>
                    <td style="font-size: 12px;"> ' . $us['os'] . ' </td>
                    <td style="font-size: 12px;"> ' . $us['version'] . ' </td>   
                   

                  </tr>

                 
               ';
            
          }
      
                  
    ?>
      
  
          </tbody>
             
        </table>

         <hr />
           <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i>
             Session Activity Info ( Latest 5 Info )</h5>

           <div class="table-responsive">

            <table class="table">
             <thead class="thead-light">

                <tr>
                  <th style="font-size: 12px;">Activity ID</th>
                  <th style="font-size: 12px;">Session ID</th>
                  <th style="font-size: 12px;">Log In Time  </th>
                </tr>

                <tr>
                  <th style="font-size: 12px;"> SID  </th> 
                  <th style="font-size: 12px;">Active Time </th>
                  <th style="font-size: 12px;">Log Out Time </th>
                </tr>

             </thead>

             <tbody>


      <?php
        
        $a = $this->session->userid;
          
        $rqur = $this->db->query( "SELECT * FROM user_session,user_activity 
                                   WHERE user_session.sid = user_activity.id AND user_session.user_id='$a'
                                   ORDER BY user_session.sid DESC LIMIT 0,5");

        $res = $rqur->result_array();
        
        
         foreach ($res as $us) 
        {
           echo' 
                <tr>
                  <td style="font-size: 14px;"> <b> ' . $us['aid'] . ' </b>  </td>
                  <td style="font-size: 11px;">' . $us['session_id'] . '  </td>
                  <td style="font-size: 14px;"> ' . $us['udate'] . '  </td>
                </tr>

                <tr>
                  <td style="font-size: 11px;">' . $us['sid'] . '  </td>
                  <td style="font-size: 12px;">' . $us['active_time'] . '  </td>   
                  <td style="font-size: 11px;">  </td>     
                </tr>

              ';
          
          }
      
                  
    ?>


             </tbody>

           </table>
        

       </div>

     </div>

  </div> 
   
      
 

  <!----------------------- Edit Profile ------------------------->

        <div class="tab-pane" id="editprofile">

          <form method="post">
           <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                     
            <div class="row">

             <div class="col-md-6">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Enter Your Full Name">
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                </div>
             </div> 

           </div> 

                    
           <div class="row">

             <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Current E-mail Address">
                </div>
             </div>

            <div class="col-md-6">
              <div class="form-group">
                 <label for="oldpass">Current Password</label>
                 <input type="password" class="form-control" name="oldpass" placeholder="Enter Your Old Password">
              </div>
            </div>  

            <div class="col-md-6">
              <div class="form-group">
                 <label for="newpassword">New Password</label>
                 <input type="password" class="form-control" name="newpassword" placeholder="Enter Your New Password">                 
               </div>
            </div> 

            <div class="col-md-6">
              <div class="form-group">
                 <label for="confirmnewpassword">Confirm Password</label>
                 <input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirm New Password">  
               </div>
            </div> 

         </div> 

                     
        <div class="text-right">
            <button type="submit" name="done" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
        </div>

    </form>

    </div>
    
    <!---------------------- End Edit Profile Content ---------------->

         </div> <!--------------- end tab-content ---------->
     </div> <!----------- end card-box-------------->

   </div> <!---------- end col ------------>

  </div>
 </div>


 </div>

 <br/>


 </section>




<script>

    function myFunction(id) 
   {
        var x = document.getElementById(id);

        if (x.className.indexOf("w3-show") == -1) 
       {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
       } 

      else { 
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className = 
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }

   }


</script>




<script>
	// put user id list into javascript array
	var userIdList = new Array();
	<?php foreach ($query as $key => $val) { ?>
		userIdList.push('<?php echo $val['user_id']; ?>');
	<?php } ?>

	// only show the clicked user details when setuser button passes value z to this function 
	function SetUser(z) {
		var p = z;
		console.log(p);
		var i;
		for (i = 0; i < userIdList.length; i++) {

			if (userIdList[i] == z) {
				if (document.getElementById(z).style.display === "none") {
					document.getElementById(z).style.display = "block";
				}
			} else {
				if (document.getElementById(userIdList[i]).style.display === "block") {
					document.getElementById(userIdList[i]).style.display = "none";
				}
			}
		}
	}







  $(document).on('click','#data',function(e) {
        e.preventDefault();
        e.stopPropagation();

        var data = $(this).data('href');
        NProgress.start();
        $.ajax({
            method: 'get',
            url: '/LikeArticle',
            data: data,
            async: true,
            cache: false,
            success: function (data){
                console.log(data);
              
                $('.LikeACountMemory-' + data.html.data.blog_id).html(data.html.view);
            }
        });
        NProgress.done();
    });











</script>



 </body>
 
