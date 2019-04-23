<!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/favicon.ico">
  <title><?php echo $user['fullname']; ?> |HelloMotion.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel='stylesheet'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  
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
    
    li{
      list-style-type:none;
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
        <div class="dropdown">
            <button type="button" href="<?php echo $user['fullname']; ?>" class="btn btn-primary" data-toggle="dropdown">
            <?php echo $user['fullname']; ?>
            </button>
            <div class="dropdown-menu"syle="width:100px;">
              <li>
                <a syle="color:white;" href="<?php echo base_url('index.php/tampilan/tampiledit'); ?>"><i class='fas fa-user'></i>Akun Saya</a>
              </li>
              <li>
                <a href="#"><i class='fas fa-pencil-alt'></i>Kirim Konten</a>
              </li>
              <li>
                <a href="<?php echo base_url('index.php/Hello/logout'); ?>"><i class='fas fa-power-off'></i>Logout</a>
              </li>
            </div>
        </div>
    </ul>
  </div>
  <img  style="width: 100%" class="afternav" src="<?php echo base_url(); ?>assets/afternav.png";>

</body>
</html>
