
<!----------------------  Registration View Page ---------------------->


<!DOCTYPE html>
 <html>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <head>

  <style>

      .column {
                float: left;
                width: 50%;
                padding: 10px;
                height: 500px; 
              }

      
      .row:after {
                    content: "";
                    display: table;
                    clear: both;
                 }


      *,
            *:before,
            *:after {
                      box-sizing: border-box;
                    }


       h2,h4 {
                   color: #7ed321;
             }

      input,
            input[type="radio"] + label,
           
            select option,

            select {
                     width: 360px;
                     padding: 1em;
                     line-height: 1.4;
                     background-color: #f9f9f9;
                     border: 1px solid #e5e5e5;
                     border-radius: 5px;
                    
                   }

         input:focus {
                       outline: 0;
                       border-color: #64ac15;
                     }

        input:focus + .input-icon i {
                                       color: #7ed321;
                                    }
        input:focus + .input-icon:after {
                                           border-right-color: #7ed321;
                                        }

             input[type="radio"] {
                                   display: none;
								  
                                  }

             input[type="radio"] + label,
                               select {
								         padding: 1em;
                                         display: inline-block;
                                         width: 100%;
                                         text-align: center;
                                         float:left;
                                         border-radius: 0;
                                      }

             input[type="radio"] + label:first-of-type {
                                       border-top-left-radius: 3px;
                                       border-bottom-left-radius: 3px;
                                    }

             input[type="radio"] + label:last-of-type {
                                      border-top-right-radius: 3px;
                                      border-bottom-right-radius: 3px;
                                 }

              input[type="radio"] + label i {
                                             padding-right: 0.4em;
                                 }

              input[type="radio"]:checked + label,
              input:checked + label:before,
              select:focus,
              select:active {
                             background-color: #7ed321;
                             color: #fff;
                             border-color: #64ac15;
                            }

             


             select {
                      height: 3.4em;
                      line-height: 2;
                    }

                    
             select:first-of-type {
                           border-top-left-radius: 3px;
                           border-bottom-left-radius: 3px;
                        }

             select:last-of-type {
                            border-top-right-radius: 3px;
                            border-bottom-right-radius: 3px;
                          }

            select:focus,
            select:active {
                            outline: 0;
                          }

            select option {
                            background-color: #7ed321;
                            color: #fff;
							
                          }

            .input-group {
                           margin-bottom: 10px;
  
                         }

            .input-group:before,
            .input-group:after {
                                 content: "";
                                 display: table;
                              }

             .input-group:after {
                                 clear: both;
                               }

             .input-group-icon {
                                  position: relative;
                              }

                              

              .input-group-icon input {
                                       padding-left: 5em;
                                      }


               /*    Fontawesome Logo Design                 */  

          .input-group-icon .input-icon {
                                            position: absolute;
                                            top: 15px;
                                            left: 5;
                                            width: 3.5em;
                                            height: 3.5em;
                                            line-height: 1em;
                                            text-align: center;
                                            pointer-events: none;
                                            color:#4d4d4d;
      
                                          }


            /*   |         Design            */

          .input-group-icon .input-icon:after {
                                                position: absolute;
                                                top: 0;
                                                bottom: 2.2em;
                                                left: 3.4em;
                                                display: block;
                                                border-right: 2px solid #cccccc;
                                                content: "";
												
                                               }

              
              .container1 {
                           max-width: 1040px;
                           padding: 1em 3em 1em 3em;
                           margin: 2em auto;
                           background-color: #fff;
                           border-radius: 4.2px;
                           box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
						  
                         }

              .row {
                     zoom: 1;
                   }
              
              .row:before,
              .row:after {
                           content: "";
                           display: table;
                         }

              .row:after {
                          clear: both;
                         }

              .col-half {
                          padding-right: 5px;
                          float: left;
                          width: 160%;
                        }

              .col-half:last-of-type {
                                padding-right: 0;
                             }

              .col-third {
                          padding-right: 10px;
                          float: left;
                          width: 33.33333333%;
                         }

              .col-third:last-of-type {
                          padding-right: 0;
                        }

     @media only screen and (max-width:900px) {
                           .col-half {
                                       width: 200%;
                                       padding-right: 0;
                                   }

                      }



        .button {
                   border:0;
                   outline:none;
                   border-radius:0;
                   padding:10px ;
                   font-size:14px;
				           float:center;
  
                   text-transform:uppercase;
                   letter-spacing:.1em;
                   background:rgb(6, 212, 51);
                   color:white;
  
  
        }


        .button-block {
                        display:block;
                        width:200%;
						align:right;
						padding-right:-15px;
                     }



       .contact_area{
                      background-color: #f1f1f1;
                   }


        .team-section{
                       overflow: hidden;
                       background-color: #f1f1f1;
                       padding: 10px;
                    }

      .border{
                display: block;
                margin: auto;
                width: 600px;
                height: 5px;
                background: #3498db;
                margin-bottom: 10px;
            }


        .section{
                  width: 600px;
                  margin: auto;
                  font-size:20px;
                  color: black;
                  text-align: justify;
                  margin-bottom: 30px;
                }

        .section:target {
                           height: auto;	
                        }


   </style>

   </head>

   <body>

   <section id="contentSection">
   <br />
    
     <div class="team-section">
          <div class="contact_area">
            <h2>Registration Form</h2>
                <div class="container1">


                  <form action="<?= base_url(); ?>register/registeruser" method="post">

                    <div class="row justify-content-center">
                      <div class='col'></div>
                        <div class="col-8 shadow mt-5 rounded">

                         <div class="form-group m-5">
                          
                          <!----- Show error messages if the form validation fails ---->

                            <?php if ($this->session->flashdata())
                           { ?>
                                <div class="alert alert-danger">
                                  <?= $this->session->flashdata('errors'); ?>
                                </div>

                              <?php } 
                           ?>

				    
                  <div class="row">
                    <div class="column" style="background-color:#85e0e0;">

                          <h3>User Info :</h3> <hr />

				   	  <!------------ Form Starts -------------------->

                        <div class="input-group input-group-icon">
                          <input type="text" name="name" placeholder="Full Name ( At least 6 Characters )" />
                          <div class="input-icon"><i class="fa fa-user"></i></div>
                        </div>

                        <div class="input-group input-group-icon">
                          <input type="text" name="uname" placeholder="User Name ( Write Unique Username ) " />
                          <div class="input-icon"><i class="fa fa-id-card"></i></div>
                        </div>

                        <div class="input-group input-group-icon">
                          <input type="password" name="password" placeholder="Password ( At least 6 Characters )" /> 
                          <div class="input-icon"><i class="fa fa-key"></i></div>
                        </div>  

                        <div class="input-group input-group-icon">
                          <input type="password" name="confirm_password" placeholder="Confirm Password"/>
                          <div class="input-icon"><i class="fa fa-key"></i></div>
                        </div>

                        <div class="input-group input-group-icon">
                        <select name="gender">
                          <option value="" disabled selected>Select Gender</option> 
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        </div>

                        <div class="input-group input-group-icon">
                          <input type="date" name="bdate" />
                          <div class="input-icon"><i class="fa fa-calender">DOB</i></div>
                        </div>


			           	  </div>


				            <div class="column" style="background-color: #aeeaea;">
					
                      <h3>Contact Info :</h3>  <hr />
                     

                        <div class="input-group input-group-icon">
                          <input type="phone" name="phone" placeholder="Mobile Number" />
                          <div class="input-icon"><i class="fa fa-mobile"></i></div>
                        </div>
        
                        <div class="input-group input-group-icon">
                          <input type="email" name="email" placeholder="Email Adress ( Write Unique E-mail Address )" />
                          <div class="input-icon"><i class="fa fa-envelope"></i></div>
                        </div>

                        <div class="input-group input-group-icon" id="address">
                          <input type="text" name="address"  placeholder="Address"/>
                          <div class="input-icon"><i class="fa fa-home"></i></div>
                        </div>

                    
                    <br />

                    <div class="input-group input-group-icon" id="re_teacher"> 
                       <button type ="submit" name="submit"class="button button-block"/>Submit</button>
                    </div>

                    </div>

				          </div>

               <hr />

              <div>
                <a style="color:red;text-align:right;" href="login"><h4>Already a User ? <b> Log In Here </b></h4></a>
              </div>

				</div>
			</div>
	 	</div>

	 </form>


   </div>
   </div>    
  </div>
         

  <br />

</section>

</body>

</html>

  
