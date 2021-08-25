<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="Theme Region" />
		<meta name="description" content="" />
		<title>Cravita Technologies | Job Portal</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?= base_url();?>/public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url();?>/public/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?= base_url();?>/public/assets/css/jquery-te.css" />
		<link rel="stylesheet" href="<?= base_url();?>/public/assets/css/slick.css" />
		<link rel="stylesheet" href="<?= base_url();?>/public/assets/css/main.css" />
		<link rel="stylesheet" href="<?= base_url();?>/public/assets/css/responsive.css" />
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		
		

		<link
			href="https://fonts.googleapis.com/css?family=Varela+Round"
			rel="stylesheet"
		/>
		
		<link rel="shortcut icon" href="<?= base_url();?>/public/assets/images/favicon.jpg" />
		<link
			rel="apple-touch-icon"
			sizes="144x144"
			href="<?= base_url();?>/public/assets/images/ico/apple-touch-icon-144-precomposed.png"
		/>
		<link
			rel="apple-touch-icon"
			sizes="114x114"
			href="<?= base_url();?>/public/assets/images/ico/apple-touch-icon-114-precomposed.png"
		/>
		<link
			rel="apple-touch-icon"
			sizes="72x72"
			href="<?= base_url();?>/public/assets/images/ico/apple-touch-icon-72-precomposed.html"
		/>
		<link
			rel="apple-touch-icon"
			sizes="57x57"
			href="<?= base_url();?>/public/assets/images/ico/apple-touch-icon-57-precomposed.png"
		/>

		<!--[if lt IE 9]>
			<script src="<?= base_url();?>/public/assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="<?= base_url();?>/public/assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body>
		<header class="tr-header">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<div class="navbar-header">
						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							data-target="#navbarNav"
							aria-controls="navbarNav"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"
								><i class="fa fa-align-justify"></i
							></span>
						</button>
						<a class="navbar-brand" href="index-2.html"
							><img class="img-fluid" src="<?= base_url();?>/public/assets/images/crlogo.png" alt="Logo" style="width:180px;"
						/></a>
					</div>

					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="nav navbar-nav">
							<li><a href="<?=base_url();?>/home/index">Home</a></li>
							<!-- <li><a href="job-post.html">Post A Job</a></li> -->
							<li><a href="<?=site_url('Home/job_list');?>">Job List</a></li>
							<li><a href="job-details.html">About Us</a></li>
							
						</ul>
					</div>
					<div class="navbar-right">
						
						<ul class="sign-in tr-list">
							<li><i class="fa fa-user"></i></li>
							<?php if (session()->has("logged_user")):?>
								<li><a href="<?=base_url();?>/signout">Sign Out</a></li>
								<li><a href="<?=base_url();?>/profile">My Profile</a></li>
							<?php else:?>
								<li><a href="<?=base_url();?>/signin">Sign In </a></li>
								<li><a href="<?=base_url();?>/signup">Register</a></li>
							<?php endif;?>
						</ul>
						
					</div>
				</div>
			</nav>
		</header>

        <?= $this->renderSection("content");?>

        <div class="footer">
			
			<div class="footer-bottom">
				<div class="container">
					<div class="copyright">
						<p>
							Copyright © 2017 <a href="#">Seeker.com.</a> All rights reserved.
						</p>
					</div>
					<div class="footer-social pull-right">
						<ul class="tr-list">
							<li>
								<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" title="Google Plus"
									><i class="fa fa-google-plus"></i
								></a>
							</li>
							<li>
								<a href="#" title="Youtube"><i class="fa fa-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<script
			src="<?= base_url();?>/public/assets/js/jquery.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/popper.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/bootstrap.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/inview.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/counterup.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/waypoints.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/slick.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/jquery-te.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/https://maps.google.com/maps/api/js?sensor=true"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/gmaps.min.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>
		<script
			src="<?= base_url();?>/public/assets/js/main.js"
			type="7e128667cbdfdbddf59e8f8b-text/javascript"
		></script>



		<script
			src="<?= base_url();?>/public/assets/../../ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
			data-cf-settings="7e128667cbdfdbddf59e8f8b-|49"
			defer=""
		></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	</body>