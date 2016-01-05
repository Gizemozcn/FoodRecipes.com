<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'?>" />
</head>

<body>
	<div class="header">
		<div>
			<a href="home.html">
			<img src="<?php echo base_url('assets/images/logo.png'); ?>" />
				</a>
		</div>
		<form action="home.html">
			<input type="text" value="Search from our Recipes around the world" id="search">
			<input type="submit" value="" id="searchbtn">
		</form>
	</div>
	<div class="body">
	
		<div>

			
			<div class="header">
			
				<ul>
					<li class="current">
						<a href="<?php echo  base_url('Home_controller/home');?> ">Home</a>
					</li>
					<li>
						<a href="recipes.html">A to Z Recipes</a>
					</li>
					<li>
						<a href="<?php echo base_url('Blog_controller/comments'); ?>">Blog</a>
					</li>
					<li>
						<a href="<?php echo base_url('Video_controller/videos'); ?>">Videos</a>
					</li>
					<li>
						<a href="#">About</a>
						
					</li>
					<li>
						<a href="<?= base_url('user/login') ?>">LogIn</a>
						
					</li>
	
				</ul>
			</div>
