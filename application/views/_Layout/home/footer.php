<script>
	//functions to get user active time
	var timer;
	var timeStart;
	var ativeTime = 0;

	//check if the value inside the variable is number and convert to string
	function getativeTime() {
		ativeTime = isNaN(ativeTime) ? 0 : ativeTime;
		return ativeTime;
	}

	//start the timer when the body tag loads
	function start_timer() {
		timerStart = Date.now();
		timer = setInterval(function () {
			ativeTime = parseInt((Date.now() - timerStart)/1000);
			set_active_time();
			timerStart = parseInt(Date.now());
		}, 5000);
	}

	//update to database when the body unloads
	function set_active_time() {
		$.post("<?=base_url('usersession/settime')?>", { timeOnSite: ativeTime }, function(data, status){
				console.log(data);
			});
	}
	$( document ).ready(function() {
		set_active_time();
	});
</script>

	<script src="<?=base_url(); ?>assets/js/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
</body>

</html>
