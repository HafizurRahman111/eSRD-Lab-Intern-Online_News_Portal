<!DOCTYPE html>
 <html>

  <head>

  

   <style>

     
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

            
     /*   Input Field           */ 

            select {
                     width: 140%;
                     padding: 1em;
                     line-height: 1.4;
                     background-color: #f5f5f5;
                     border: 1px solid #e5e5e5;
                     border-radius: 5px;
                     
                   }

     
   /*   Input Field Margin /Gap                 */ 

      .input-group {

                     margin-bottom: 10px;
  
                   }

   
            
 /*   Input Icon                 */ 

     .input-group-icon {
                          position: relative;
                        }

                              
   /*   Input Placeholder Position                 */  

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
                        max-width: 450px;
                        padding: 1em 3em 5em 3em;
                        margin: 2em auto;
                        background-color: #fff;
                        border-radius: 5px;
                        box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
                       
                   }


        .button-block {
                        display:block;
                        width:200%;
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

   </style>

  </head>


  <body>

  <br />
  
  <section id="contentSection">
   <br />
   <div class="team-section">

      <div class="container1">
    
      <h2 style="text-align:center;color:red"><b>Admin Log In </b></h2>

       <hr />
        
         <form action="<?= base_url(); ?>adminlogin/a_doLogin" method="post">

         <!---------- Alert for Login ( Wrong Email/Password , Successful Log In)    ------->

          <?php if ($this->session->flashdata()) 
            { ?>
              <div class="alert alert-warning">
                <?= $this->session->flashdata('msg'); ?>
              </div>
           <?php } 
         ?>

            
           <br />
           
            <div class="input-group input-group-icon">
              <input type="text" name="a_email" placeholder="Enter Your E-mail" required/>
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="password" name="a_pass" placeholder="Enter Your Password " required/>
              <div class="input-icon"><i class="fa fa-key"></i></div>
           </div>

          <br />

          <div class="input-group input-group-icon">
             <button type ="submit" name ="submit" class="button_login button-block"/>Log In</button>
          </div>

          <br />
          <hr />

        

          
        </form>

     </div>

    </div>

      <br />
      
    </section>


	  </body>
	</html>


  <!----------------------------------    Login Page Complete  ---------------------------------->

  




