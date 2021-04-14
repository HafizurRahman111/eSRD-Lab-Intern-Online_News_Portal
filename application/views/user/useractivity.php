
  
   <!----------------------  My Activity/User Activity view Page ---------------------->

  <!DOCTYPE html>
  <html>

  
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/user_activity_info_design.css" rel="stylesheet" />

  <head>

   <style>

	 .team-section{
                    overflow: hidden;
                    background-color: #e0e0d1;
                    padding: 20px;
			     }

  </style>

  </head>

  <body>

  <section id="contentSection">
  
  <br />
   <div class="team-section">

	  <h2 style="text-align:center;"> My Activity Info </h2> <hr /> <br />
	  
		
	<?php

		$a = $this->session->userid;
						
		$rqur = $this->db->query("SELECT * FROM user_infos WHERE user_id=$a " );
			
		$this->db->select('*');
		$res = $rqur->result_array();
				
		    
		foreach ($res as $d) 
	   {
		
	 	
	  	 echo '<h2 class="mt-4">' . $d['name'] . '</h2>';
		 echo '<h5>Username : ' . $d['uname'] . '</h5>';
		 echo '<h5>User ID : ' . $d['user_id'] . '</h5> <br />';

		 $dts = $mod->getUserData($d['user_id']);


		 $adt = $mod->getActivity($d['user_id']);


		  echo '
				  <table>
					<thead>
						
						<div class="table-responsive">
						<table class="table table-bordered table-striped">
						
						<tr>
							<th style="font-size: 15px; text-align:center;">Page Title</th>
							<th style="font-size: 15px; text-align:center;">Times Visited</th>
							<th style="font-size: 15px; text-align:center;">Active Times</th>
					   </tr>				

					</thead>
	
					<tbody>
						
				';


			 foreach ( $adt as $k => $val ) 
			{
					
			  echo "  <tr> 
			            <td style='text-align:center;' class='column1'>".$val->title." </td> 
						<td style='text-align:center;' class='column2'>".$val->num." </td> 
						<td style='text-align:center;' class='column2'>".$val->sec." </td>
					 </tr>   
		
		           ";

			}


			echo '
				   </tbody>

				  </table>
			
			 ';


	  }

	?>

		</div>
	 
    <br/>

      
   </section>


	<script>

		// put user id list into javascript array

		var userIdList = new Array();

		<?php 

				foreach ($query as $key => $val) 
				{ ?>

					userIdList.push('<?php echo $val['user_id']; ?>');

			<?php
			
			} ?>


		// only show the clicked user details when setuser button passes value z to this function 

			function SetUser(z) 
		{
			var p = z;
			console.log(p);
			var i;

				for (i = 0; i < userIdList.length; i++)
				{

					if (userIdList[i] == z) 
				{
						if (document.getElementById(z).style.display === "none") 
					{
						document.getElementById(z).style.display = "block";
					}
				} 
				
					else 
				{
						if (document.getElementById(userIdList[i]).style.display === "block") 
					{
						document.getElementById(userIdList[i]).style.display = "none";
					}
				}

			}

		}


	</script>

	</body>
	</html>
