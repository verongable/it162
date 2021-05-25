<?php include 'big-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content ="noindex,nofollow" />
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="https://use.fontawesome.com/73d0c2fb63.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
</head>
<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
    <div class="header-title"><a href="index.php">Veronica's Web Dev Guide <i class="logo fa <?=$logo?>"></i></a></div>
    <nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB 120</span></a></li>
    <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
    <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
    <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
    <li><a class="dropdown-arrow" href='#'><span>Google</span></a>
    <ul class="sub-menus">
        <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
        <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
        <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a>
    </ul>
    </li>
    <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
    <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye">
     </i> Web Cam</span></a></li>
  </ul>
</nav>
</header>
<!--HEADER ENDS HERE -->
<!-- START LEFT COL -->
<section>
    <h2 class="pageID"><?=$PageID?></h2>
