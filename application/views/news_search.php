
 
 <!----------------------  News search View Page ---------------------->

<!DOCTYPE html>
 <html>
  
 <head>

</head>

    
    <body>

      <section id="contentSection">
    
      <br />
       <hr />

         <h2 align="center"><b>News Live Data Search</b></h2><br />

          <div class="form-group">

              <div class="input-group">
                <span class="input-group-addon"><b>Search</b></span>
                <input type="text" name="search_text" id="search_text" placeholder="Search by Title / Author / Category / Date of Publication" class="form-control" />
              </div>

          </div>

         <br />

          <div id="result"></div>

            <div style="clear:both"></div>

          <br />
        <br />
      <hr />

   </section>

   <script>

         $(document).ready(function()
        {

           load_data();

         function load_data(query)
        {
                $.ajax({
                url:"<?php echo base_url(); ?>livesearch/fetch",
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
















   