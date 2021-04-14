
  
  
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



<section id="contentSection">

<br />
<div class="team-section">

<div class="col-lg-8 col-md-8 col-sm-8">
  
     <div class="contact_area">
       <h2> Add New News </h2>
        <h4> Insert New News Information </h4>

        <hr />

            <?php if ($this->session->flashdata()) { ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('errors'); ?>
            </div>
            <?php } ?>
             

       <form action="<?= base_url(); ?>admincreatenews/store_news" method="post" class="contact_form" enctype='multipart/form-data'>


         <input class="form-control" type="text" name="n_title" placeholder="News Title">
         <textarea class="form-control" rows="3" name="short_des" placeholder="Short Description"></textarea>
         <textarea class="form-control" rows="5" name="description" placeholder="News Description"></textarea>
         
         <input class="form-control" type="text" name="author" placeholder="Name of Author">

          <p >News Category</p>
            <select class="form-control" name="category" id="category">
                <option value="Sports"> Sports </option>
                <option value="Country"> Country </option>
                <option value="Business"> Business </option>
                <option value="Culture"> Culture </option>
                <option value="Politics"> Politics </option>
                <option value="International"> International </option>
                <option value="Technology"> Technology </option>

            </select>

        <br />
       
        <input class="form-control" name="file" id="fileupload" type="file" multiple="true" placeholder="Select Image for News">
        <br />
       <hr />
        
        <button class="btn btn-success" type ="submit" name="submit" id="submit"> Publish News</button>


       </form>

     </div>

  </div>

</div>

<br/>

 
</section>







    

   
    
      


       
