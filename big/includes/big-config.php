<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


// //echo basename ($_SERVER['PHP_SELF']);

// define ('THIS_PAGE',basename ($_SERVER['PHP_SELF']));
// //echo THIS_PAGE;
// //die;

switch (THIS_PAGE){

    case "../index.php":
        $title = "Veronica's IT 162 Portal Homepage";
        $logo = 'fa-heart';
        $PageID = "Portal Homepage";
    break;


    case "index.php":
        $title = "Veronica's Web Research (BIG)";
        $logo = 'fa-angellist';
        $PageID = "Client Questionnaire";
    break;

    case "flexbox.php":
        $title = "Veronica's Flexbox Research/Tutorial";
        $logo = 'fa-cube';
        $PageID = "Flexbox";
    break;

    case "galleries.php":
        $title = "Veronica's Gallery Research";
        $logo = 'fa-camera-retro';
        $PageID = "Google Galleries";
    break;

    case "calendar.php":
        $title = "Veronica's Google Calendar";
        $logo = 'fa-calendar';
        $PageID = "Google Calendar";
    break;

    case "map.php":
        $title = "Veronica's Google Map";
        $logo = 'fa-map-o';
        $PageID = "Google Maps";
    break;

    case "youtube.php":
        $title = "Veronica's Favorite YouTube Resources";
        $logo = 'fa-youtube';
        $PageID = "YouTube Videos for Web Designers";
    break;

    case "shoppingcarts.php":
        $title = "Veronica's Shopping Cart Research/Tutorial";
        $logo = 'fa-cart-plus';
        $PageID = "Shopping Carts";
    break;

    case "siteapp.php":
        $title = "Veronica's Websites vs Apps Research";
        $logo = 'fa-wrench';
        $PageID = "Websites vs Apps";
    break;

    case "webcam.php":
        $title = "Veronica's Favorite Live Webcams";
        $logo = 'fa-eye';
        $PageID = "Live Webcams";
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-object-group';
        $PageID = "";
    }



/*creating a function to generate links and keep highlight on current page

 <li><a href="index.php" class="selected">Home</a></li>
          <li><a href="big/index.php">Big</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart & Layout</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Me</a></li>

*/



?>
