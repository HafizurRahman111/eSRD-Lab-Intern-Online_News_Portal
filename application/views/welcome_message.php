<div class="container">
	<div class="jumbotron">
		<h5>
			<?php
			if ($this->session->userdata('logged_in')) {
				echo 'Welcome ' . $this->session->userdata('name')."<br><br>";
			} else {
				echo 'You are not logged in<br><br>';
			}
			?>
		</h5>
		<h4>create a news portal,</h4>
		<h6>where 5 recent news will be seen with title and a short description and order by recent at home page. When a user clicks on news it will display full news count number of time user visited the news. The news will consist of title, details, author, category, date of publishing, etc. another page will show all the news where users can search for news. </h6>
	</div>
</div>
