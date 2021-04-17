<div class="container-fluid">
	<div class="m-2">
		<div class="jumbotron">
			<h1 class="">Registered Users List</h1>
		</div>
		<div class="row">
		<div class="col-3"">
			<?php
			$query = $this->db->get('user_credential')->result_array();
			foreach ($query as $d) {
				echo '<div class="card shadow m-2" onclick="SetUser(' . $d['user_id'] . ')">';
				echo '<img class="card-img-top mt-3 mx-auto rounded-circle" style="width: 80px;"
					src="' . base_url('assets/avatars_img/male.png') . '" alt="Generic placeholder image">';
				echo '<div class="card-body text-center">';
				echo '<h6>' . $d['name'] . '</h6></div></div>';
			}
			?>
		</div>

		<div class='col-9'>
			<?php
			for ($i = 0; $i < count($query); $i++) {
				echo '<div class="row" id="'.$query[$i]['user_id'].'" style="display: none"><div class="col-7" style="float:left"><h4>User info</h4>';
				echo '<h2 class="mt-4">' . $query[$i]['name'] . '</h2>';
				echo '<h5>Username: ' . $query[$i]['uname'] . '</h5>';
				$dts = $mod->getUserData($query[$i]['user_id']);

				echo '<div>Common OS: ';
				if (isset($dts[0]->os)) {
					echo '<b>' . strval($dts[0]->os) . '</b></div>';
				} else {
					echo "No data found!! </div>";
				}

				echo '<div>Common IP: ';
				if (isset($dts[0]->ipaddress)) {
					echo strval($dts[0]->ipaddress) . '</div>';
				} else {
					echo 'No data found!!</div>';
				}
				
				echo '<div>Preferred Browser: ';
				if (isset($dts[0]->browser)) {
					echo strval($dts[0]->browser) . '</div>';
				} else {
					echo 'No data found!!</div>';
				}

				echo '</div>';

				echo '<div class="col-5"><h4>User Activity Info</h4><table class="table">';
				$adt = $mod->getActivity($query[$i]['user_id']);
				foreach ($adt as $k => $val) {
					echo "<tr><td>".$val->title."</td><td>".$val->num."</td><td>".$val->sec."</td></tr>";
				}
				echo '</table></div></div>';
			}
			?>
		</div>
		</div>
	</div>
	<h5>
</div>

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
</script>
