<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />

    <!-- ========== SEO ========== -->
    <title>Hotel Rerservasi</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png" />

    <!-- ========== STYLESHEETS ========== -->
    <link href="<?= BASEURL; ?>/revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/famfamfam-flags.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- ========== ICON FONTS ========== -->
    <link href="<?= BASEURL; ?>/fonts/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= BASEURL; ?>/fonts/flaticon.css" rel="stylesheet" />

    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        <div class="top_menu transparent hidden-xs">
            <div class="container">
                <ul class="top_menu_right">
                    <li>
                        <i class="fa fa-phone"></i><a href="tel:021-75555555"> 021-75555555 </a>
                    </li>
                    <li class="email">
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:contact@hotel.com">contact@hotel.com</a>
                    </li>
                    <li class="language-switcher">
                        <nav class="dropdown">
                            <a href="#" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown">
                                <i class="famfamfam-flag-gb"></i>English<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="famfamfam-flag-gr"></i>Ελληνικά</a>
                                </li>
                                <li>
                                    <a href="#"><i class="famfamfam-flag-it"></i>Italiano</a>
                                </li>
                                <li>
                                    <a href="#"><i class="famfamfam-flag-de"></i>Deutsch</a>
                                </li>
                                <li>
                                    <a href="#"><i class="famfamfam-flag-fr"></i>Français</a>
                                </li>
                                <li>
                                    <a href="#"><i class="famfamfam-flag-es"></i>Español</a>
                                </li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ========== HEADER ========== -->
        <header class="fixed transparent">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand light" href="<?= BASEURL; ?>">
                        <img src="images/logo-hotel.png" height="32" alt="Logo" />
                    </a>
                    <a class="navbar-brand dark nodisplay" href="<?= BASEURL; ?>">
                        <img src="images/logo-hotel.png" height="32" alt="Logo" />
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display: none">MENU</li>
                        <li class="">

                           
                        </li>
                        <li class="active"><a href="<?= BASEURL; ?>/">HOME</a></li>
                        <li><a href="<?= BASEURL; ?>/contact">CONTACT US</a></li>
                        <li class="menu_button">
                            <a href="<?= BASEURL; ?>/booking" class="button btn_yellow"><i class="fa fa-calendar"></i>BOOK ONLINE</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </header>