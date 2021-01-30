<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?=base_url(); ?>assets/js/jquery.min.js"></script>
	<title><?= $page_title ?></title>
</head>

<body onload="start_timer()" onbeforeunload="set_active_time()">

<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-light bg-light static-top">
	<div class="container-fluid">
		<a class="navbar-brand float-left" href="#">
			<h4>Exam problem</h4>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse float-right" id="navbarResponsive">
			<ul class="navbar-nav ml-auto float-right">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Home</a>
				</li>
				<?php if($this->session->userdata('logged_in')) { ?>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/activity') ?>">User Activity</a>
				</li>
				<?php } ?>
				<li class="nav-item">
					<?php
					if (!$this->session->userdata('logged_in')) {
						echo '<a href="' . base_url('/register') . '" class="nav-link">Register</a>';
					}
					?>
				</li>
				<li class="nav-item">
					<?php
					if (!$this->session->userdata('logged_in')) {
						echo '<a class="nav-link" href="' . base_url('/login') . '">Login</a>';
					}
					else {
						echo '<a class="nav-link" href="' . base_url('login/logout') . '">Logout</a>';
					}
					?>
				</li>
			</ul>
		</div>
	</div>
</nav>
