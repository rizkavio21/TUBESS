<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/iconhellofest.ico">
  <title>  <?= $title ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/helloFEST.css">
  

   
</head>
<body>
    <div class="navbar">
        <ul class="navbar navbar-default navbar-fixed-top">
            <li class="navbar-brand" href="#">
                <img src="<?php echo base_url(); ?>assets/hellofest.png">
            </li> 
            <li class="dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">Home</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Competition</a>
                    <a class="dropdown-item" href="#">Awarding</a>
                    <a class="dropdown-item" href="#">Main Concert</a>
                    <a class="dropdown-item" href="#">Roadshow</a>
                    <a class="dropdown-item" href="#">Jejaring Konten Lokal</a>
                </div>
            </li>
            <li class="dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">#hellofest12th</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">acara</a>
                    <a class="dropdown-item" href="#">registrasi</a>
                    <a class="dropdown-item" href="#">finalis</a>
                    <a class="dropdown-item" href="#">semi finalis</a>
                    <a class="dropdown-item" href="#">juri</a>
                    <a class="dropdown-item" href="#">faq</a>
                </div>
            </li>
            <li class="dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">Cara ikutan</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">faq kompetisi</a>  
                </div>
            </li>
            <a class="nav-link" href="#">about us</a>
            <a class="nav-link" href="#">video</a>
            <a class="nav-link" href="#">contact</a>
        
            <div id="userinfo" class="nav navbar-nav navbar-right">
                <button style="background-color: grey; border: none;">
                    <input type="submit" href= "<?php echo base_url('Utama/registrasi') ?>"class="button" value="Daftar!" />
                    <input type="submit" class="button" value="Login"/>
                </button>
            </div>
        </ul>
    </div>
    
</body>
</html>
