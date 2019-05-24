<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/favicon.ico">
  	<title>Admin| HelloMotion.com</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
		/*#mainNav:after {
    		display: block;
    		content: " ";
    		height: 12px;
    		width: 100%;
    		background-image: url(assets/img/afternav.png);
		}*/
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
		    font-weight: bold;
		}
		#page-content{
			background-color: #fff;
		    min-height: 500px;
		    padding: 30px 0 50px 0;
		}
		.table th{
			font-weight: bold;
		}
		#page-content .table .label {
		    border-radius: 0;
		    -moz-border-radius: 0;
		    -webkit-border-radius: 0;
		    font-size: 12px;
		    text-shadow: none;
		    padding: 8px 10px;
		}
		.label, .badge {
		    display: inline-block;
		    padding: 2px 4px;
		    font-size: 11.844px;
		    font-weight: bold;
		    line-height: 14px;
		    color: #ffffff;
		    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
		    white-space: nowrap;
		    vertical-align: baseline;
		    background-color: #999999;
		}
		#page-content .table .label.label-closed {
    		background-color: #be1e2d;
		}
		.title-project{
		    margin-left: 0px;
		    display: block;
		    color: #333333;
		    font-weight: bold;
		    float: right;
		    width: 70%;
		
		}
		td .title-project{
			text-decoration: none;
		}
		.entry-img {
		    position: absolute;
		    left: 0;
		    top: 0;
		    width: 110px;
		    height: 65px;
		}
		.table thead th{
			border-top: none;
		}
		#main-footer {
    		background-color: #000;
    		height: 45px;
    		color: #fff;
		}
		.nav-link:hover
		{
			color:#ffff66;
		}
		table .title-project:hover{
			color: #ff8566;
		}		
	</style>
</head>
<body>
<div id="mainNav">
	<nav class="navbar navbar-expand-sm" style="background-color: #1aaed0;">
	  <a class="navbar-brand" href="#">
	    <img style="margin-left: 20px;" src="<?php echo base_url(); ?>assets/logo.png";>
	  </a>
	  
	  <ul class="navbar-nav" style="font-weight: bold;">
	    <li class="nav-item">
	      <a class="nav-link" href="#">HOME</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('index.php/Admin/dashboard'); ?>">PARTISIPASI</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('index.php/blog/index'); ?>">BLOG</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">ACADEMY</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">HELLOFEST</a>
	    </li>
	  </ul>
	  <div class="div-input">
			<a href="<?php echo base_url('index.php/Admin/logout'); ?>" style="text-decoration: none; width : 20px;">
				<input class="btn btn-secondary" type="button" value="Logout">
			</a>
	  </div>
	</nav>
</div>
<img class="afternav" style="width: 100%" src="<?php echo base_url('assets/afternav.png'); ?>">
<section id="page-content">
	<div class="container">
		<h3 class="title-section">Partisipasi</h3>
		<table class="table">
			<thead>
				<tr>
					<th style="width:40%;">Project</th>
					<th style="width:15%;">Type</th>
					<th style="width:15%;">Deadline</th>
					<th style="width:15%;">Entries</th>
					<th style="width:15%;">Award</th>
					<th style="width:15%;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($partisipasi as $key) { ?>
				<tr>
					<td><?php echo $key->project; ?></td>
					<td><span class="label label-closed"><?php echo $key->type; ?></span></td>
					<td><?php echo $key->deadline; ?></td>
					<td><?php echo $key->entries; ?></td>
					<td><?php echo $key->award; ?></td>
					<td><a href="<?php echo base_url('Admin/edit/'.$key->id); ?>">edit</a></td>
					<td><a href="<?php echo base_url('Admin/delete/'.$key->id); ?>">delete</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	
	</div>
</section>
<footer id="main-footer"></footer>
</body>
</html>
