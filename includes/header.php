<?php include 'includes/portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="https://use.fontawesome.com/73d0c2fb63.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Veronica's SCC IT162 Portal</a></h1>
    <nav>
        <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
        <!--
          <li><a href="index.php" class="selected">Home</a></li>
          <li><a href="big/index.php">Big</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart & Layout</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Me</a></li> -->

          <!-- Triggers hamburger menu -->
          <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
        </ul>
    </nav>
</header>
<!--HEADER ENDS HERE -->