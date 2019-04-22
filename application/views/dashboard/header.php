<!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="shortcut icon" href="<?php echo base_url(); ?>TUBESS/assets/favicon.ico">
  <title>hellomotion.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel='stylesheet'>
 
  <style type="text/css">
    body{
      font-family: 'Montserrat' , sans-serif;
      font-weight: bolder;
      font-size:16px;
    }
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  
    .navbar{
      background-color: #1aaed0;
      text-align:center;
      margin-right: auto;
      margin-left: auto;

    }
    .nav-link{
      color: #FFFFFF;
      position: relative;
      font-weight:bold;
      content: 52px 20px;
      padding: 0 8px 0 8px;
    }
    .nav-link:hover {
    color: #FFFF00;
    }
    .button{
      background-color: grey;
      border: none;
      text-align: center;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      top: 70px;
      
    }
    .btn {
      background-color: #6D6D6D;
      border-radius: 0px;
      border: solid 0px #6d6d6d;
    }
    .btn:hover {
      background-color: #6D6D6D;
      border: solid 0px #6d6d6d;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <ul class="navbar navbar-default navbar-fixed-top">
      <li class="navbar-brand" href="#">
        <img src="<?php echo base_url(); ?>/assets/logo.png" href="<?php echo site_url('index.php/')?>">
      </li> 
        <a class="nav-item nav-link" href="#">HOME</a>
        <a class="nav-item nav-link" href="#">PARTISIPASI</a>
        <a class="nav-item nav-link" href="#">BLOG</a>
        <a class="nav-item nav-link" href="#">ACADEMY</a>
        <a class="nav-item nav-link" href="#">HELLO FEST</a>
        <div id="userinfo" class="nav navbar-nav navbar-right">
          <div class="hai" style="display: flex; background-color: #6d6d6d;">
            <a class="btn btn-secondary" href="#"><?php print_r($_SESSION['fullname']); ?> </a>
              <div >
                <a class="btn btn-secondary" href="<?php echo base_url('dashboard/logout'); ?>">Logout</a>
              </div>
          </div>
      </li>
    </ul>
  </div>
  </div>

</body>
</html>
