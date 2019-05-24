<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Bootstrap Example</title>
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
		.title-project:hover{

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
	    <img style="margin-left: 20px;" src="<?php echo base_url(); ?>assets/img/HelloMotion.png";>
	  </a>
	  
	  <ul class="navbar-nav" style="font-weight: bold;">
	    <li class="nav-item">
	      <a class="nav-link" href="#">HOME</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo base_url(); ?>C_Partisipasi/index">PARTISIPASI</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo base_url(); ?>C_Blog/index">BLOG</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">ACADEMY</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">HELLOFEST</a>
	    </li>
	  </ul>
	  <div class="div-input">
	  	<a href="<?php echo base_url('Admin/logout') ?>" style="text-decoration: none;"><span class="input">Logout</span></a>
	  	<a href="#" style="text-decoration: none;"><span class="input"><?php print_r($_SESSION['username']); ?> </span></a>
	  </div>
	</nav>
</div>
<img class="afternav" style="width: 100%" src="<?php echo base_url('assets/afternav.png'); ?>">
<section id="page-content">
	<div class="container">
		<?php foreach ($partisipasi as $key) {?>
			<form method="post" action="<?php echo base_url('Admin/editAction/'.$key->id); ?>">
			<table>
            <tr>
				<tr>			
                        <td>Project</td>
                        <td><input type="text" name="project" value="<?php echo $key->project ?>"></td>
				</tr>
                <tr>
                        <td>Type</td>
                        <td><input type="text" name="type" value="<?php echo $key->type ?>"></td>
                </tr>
                <tr>
                        <td>Deadline</td>
                        <td><input type="date" name="deadline" value="<?php echo $key->deadline ?>"></td>
                </tr>
                <tr>
                        <td>Entries</td>
                        <td><input type="number" name="entries" value="<?php echo $key->entries ?>"></td>
                </tr>
                <tr>
                        <td>Award</td>
                        <td><input type="text" name="award" value="<?php echo $key->award ?>"></td>
                </tr>
                <tr>
                        <td>Action</td>
                        <td><input type="submit" name="action" value="edit"></td>
                </tr>
			</tr>	
			<?php } ?>		
			</table>
		</form>
	
	</div>
</section>
<footer id="main-footer"></footer>
</body>
</html>
