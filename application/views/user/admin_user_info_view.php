
  
  
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
         width: 900px;
         height: 5px;
         background: #3498db;
         margin-bottom: 20px;
           }


   .section{
               width: 900px;
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

<div class="col-lg-12 col-md-10 col-sm-8">
  
     <div class="contact_area">
       <h2>User Info List</h2>

       
            <div class="form-outline">
               
                <input type="text" name="search_text" id="search_text" placeholder="Search User" class="form-control" />
              
              </div>

              <br />
                

             <h4>Here is the full list of the users</h4>

             <br />

         <div id="result"></div>

         <div style="clear:both"></div>

     
           
       <br />



</tbody>
</table>

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
       url:"<?php echo base_url(); ?>adminuserinfo/fetch",
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
