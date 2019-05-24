<!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/favicon.ico">
  <title><?= $title; ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/page1.css">
 
  <style type="text/css">
   .navbar-brand{
			margin-left: 120px;
		}
		.nav-link{
			color: white;
			font-size: 16px;
		}
		.afternav{
			display: block;
		}
		.div-input{
			background-color: #6d6d6d;
			margin-left: 150px;
		    line-height: 35px;
		    position: relative;
		}
		.input{
			width: 150px;
			height: 37px;
    		font-size: 16px;
		    padding: 0 10px;
		    color: #fff;
		}
		.title-section{
			background-color: #1aaed0;
    		font-family: 'Montserrat', sans-serif;
		    font-size: 16px;
		    line-height: 50px;
		    padding: 0 18px;
		    display: block;
		    color: #fff;
		    margin: 20px 0;
		    margin-bottom: -20px;
		    font-weight: bold;
		}
		#page-content{
			background-color: #fff;
		    min-height: 500px;
		    padding: 30px 0 50px 0;
		}	
		.table thead th{
			border-top: none;
			border-bottom: 3px solid white;
		}
		#main-footer {
    		background-color: #000;
    		height: 45px;
    		color: #fff;
		}
		tbody td h3,p{
			margin-left: -20px;
		}
		tbody td h3{
			font-size: 20px;
		}
		tbody td h3:hover{
			color: #ff8566;
			text-decoration: underline;
		}
		.nav-link:hover
		{
			color:#ffff66;
		}
	</style>
</head>
<body>
<div id="mainNav">
	<nav class="navbar navbar-expand-sm" style="background-color: #1aaed0;">
			<a class="navbar-brand" href="<?php echo site_url('index.php/utama/index'); ?>">
        <img style="margin-left: 130px;" src="<?php echo base_url(); ?>assets/logo.png";>
      </a>
	  
	  <ul class="navbar-nav" style="font-weight: bold;">
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('index.php/utama/index'); ?>"">HOME</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">PARTISIPASI</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('index.php/blog/index'); ?>">BLOG</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">ACADEMY</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('index.php/hellofest/index'); ?>">HELLOFEST</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('index.php/Admin/login'); ?>">ADMIN</a>
      </li>
	  </ul>
	  <div class="div-input">
	  	<a href="<?php echo site_url('index.php/daftar/index'); ?>" style="text-decoration: none;"><span class="input">Daftar!</span></a>
	  	<a href="<?php echo site_url('index.php/Hello/login'); ?>" style="text-decoration: none;"><span class="input">Login</span></a>
	  </div>
	</nav>
	</div>
	<img class="afternav" style="width: 100%; display:block;" src="<?php echo base_url(); ?>assets/afternav.png">
</body>
</html>
