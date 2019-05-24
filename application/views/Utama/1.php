<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/page1.css">
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <style>
        body{
            background-color: rgb(35, 35, 35);
        }
    </style>
</head>
<body>
    <div class="Banner mx-auto justify-content-center" >
        <img src="<?php echo base_url(); ?>assets/banner.jpg"/>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/1jpg.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container col-md-12">
        <section id="isi mx-auto">
            <div class="iklan">
                <div class="container">
                        <div class="konten " style="
                        margin:50px 20px;">
                            <table>
                                <td>
                                    <img class = "k1" href="#" src="<?php echo base_url(); ?>assets/iklan1.jpg"/>
                                </td>
                                <td>
                                    <img style = "margin:0 13px 0px 13px;" class = "k2" href="#" src="<?php echo base_url(); ?>assets/iklan2.jpg"/>
                                </td>
                            </table>
                        </div>
                </div>
            </div>
            <div class="Karya" style=" margin-left:-85px; margin-right:100px; width:100%;">
                <div class="container" id="container">
                    <h3 class="col-md-10" style=" background-color:#1aaed0; color:white; height:50px;">karya terbaru</h3>
                    <table>
                        <td>
                            <img class="foto" href = "#" src="<?php echo base_url(); ?>assets/bro 001.jpg" style="width:217px; 
                    height:217px; margin: 0 12px 24px 0px; "/>
                        <td>
                            <img href = "#" src="<?php echo base_url(); ?>assets/bro002.jpg" style="width:217px; 
                    height:217px; margin: 0 12px 24px 12px;"/>
                        </td>
                        <td>
                            <img href = "#" src="<?php echo base_url(); ?>assets/bro03.jpg"style="width:217px; 
                    height:217px; margin: 0 12px 24px 12px;"/>
                        </td>
                        <td>
                            <img href = "#" src="<?php echo base_url(); ?>assets/bro04.jpg"style="width:217px; 
                    height:217px; margin: 0 0px 24px 12px;"/>
                        </td>
                    </table>
                </div>
            </div>
            <div class="container mx-auto">
                    <h3 class="col-sm-10" style="
                    color:white; height:50px; background-color:#1aaed0" id="container">artikel</h3>
                    <div class="container" style="padding:0%">
                        <div id="artikel1"> 
                            <table>
                                <tr>
                                    <td>
                                        <img style="margin: 0 24px 12px 0;" class="isinyakiri" href = "#" src="<?php echo base_url(); ?>assets/11.jpg">
                                        
                                    </td>
                                    <td>
                                        <img style="margin: 0 24px 12px 0px;" class="isinya" href = "#" src="<?php echo base_url(); ?>assets/12.jpg"/>
                                        
                                    </td>
                                </tr>
                                    <td>
                                        <img class= "isinyakiri" href = "#" src="<?php echo base_url(); ?>assets/13.jpg"/>
                                        <div class="isikonten">
                                            <p>Uzone.id X HelloMotion Family Gathering Volume 6!</p>
                                        </div> 
                                    </td>
                                    <td>
                                        <img class= "isinya" href = "#" src="<?php echo base_url(); ?>assets/14.jpg"/>
                                        <div class="isikonten">
                                            <p>Desain Fotoset Foto Presiden & Wakil Presiden 2019-2014</p>
                                        </div> 
                                    </td>
                        </div>    
                    </div>
                    </div>
        </section>
    </div>
</body>
</html>