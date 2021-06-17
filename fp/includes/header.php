<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content ="noindex,nofollow" />
    <script src="https://kit.fontawesome.com/3a95af4878.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<main class="wrapper">
<header>
    <div class="header-title"><a href="template.php"><img src="images/skylers-boutique-logo.svg" alt="Logo SVG"/></a></div>
    <nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
    <li><a href="template.php"><span>Home</span></a></li>
    <li><a href="about.php"><span>About Skyler</span></a></li>
    <li><a class="dropdown-arrow" href='#'><span>Clothing</span></a>
    <ul class="sub-menus">
        <li><a href="tops.php"><span>Tops</span></a></li>
        <li><a href="bottoms.php"><span>Bottoms</span></a></li>
        <li><a href="dresses.php"><span>Dresses</span></a>
        <li><a href="accessories.php"><span>Accessories</span></a>
    </ul>
    </li>
    <li><a href="faq.php"><span>FAQ</span></a></li>
    <li><a href="contact.php"><span>Contact</span></a></li>
    </ul>
</nav>
</header>
<!--HEADER ENDS HERE -->
<section>