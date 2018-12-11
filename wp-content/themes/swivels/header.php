<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>TippettSwivels</title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo get_bloginfo('template_directory');?>/img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link href="<?php echo get_bloginfo('template_directory');?>/css/others/style.css" rel="stylesheet">

	<link href="<?php echo get_bloginfo('template_directory');?>/css/others/animate.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory');?>/css/others/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory');?>/css/others/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory');?>/css/others/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory');?>/css/others/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo get_bloginfo('template_directory');?>/style.css" rel="stylesheet">

      <!-- Responsive CSS -->
    <link href="<?php echo get_bloginfo('template_directory');?>/css/responsive/responsive.css" rel="stylesheet">


      <!-- Fonts CSS -->

    <?php wp_head();?>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>
  

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="http://localhost/tippettswivels/" class="yummy-logo logo_hover">Swivel Consultants (NZ) Ltd</a>
                        <span>SWIVEL MANUFACTURERS & DESIGNERS</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 special_flex">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">

                        <?php 
				            $args = array (
				              'theme-location'=>'main-menu',
				              'container'=>'ul',
				              'menu_class'=>'navbar-nav'

				            );

				             wp_nav_menu($args);

				        ?>
                            <!-- <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Industry Solutions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Product Catalogue</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Food Grade Certification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Special Offers</a>
                                </li>
                            </ul> -->

                            <div class="special_offers">
                            <a class="spec_hover" href="http://localhost/tippettswivels/index.php/special-offers/"><span>SPECIAL OFFERS</span></a>
                            </div>

                        </div>
                    </nav>
                
                </div>
            </div>


    </header>
    <!-- ****** Header Area End ****** -->








