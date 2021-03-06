
    <!----------------------------------  eSRD News ------------------------------->
                <!----------------  Md. Hafizur Rahman ---------------->
   
       <!------------------------  Contact Us View Page ------------------------>

<!DOCTYPE html>
 <html lang="en">

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

		

 </style>

 </head>

 <body>

  
  <section id="contentSection">
  
  <br />
   <div class="team-section">

   <div class="col-lg-8 col-md-8 col-sm-8">
       
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>Send us your query and suggestions</p>

            <?php if ($this->session->flashdata()) { ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('errors'); ?>
            </div>
            <?php } ?>
            

            <form action="<?= base_url(); ?>contact/store_message" method="post" class="contact_form">

              <input class="form-control" type="text" name="c_name" placeholder="Name*">
              <input class="form-control" type="email" name="c_email" placeholder="Email*">
              <textarea class="form-control" cols="20" rows="5" name="c_message" placeholder="Message* ( Not more than 100 words )"></textarea>
              <input type="submit" value="Send Message">

            </form>

          </div>

	   </div>

     </div>

    <br/>

      
   </section>

  </body>

  </html>
  