<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

// //echo basename ($_SERVER['PHP_SELF']);

// define ('THIS_PAGE',basename ($_SERVER['PHP_SELF']));
// //echo THIS_PAGE;
// //die;

switch (THIS_PAGE) {
    case "template.php":
        $title = "Skyler's Boutique";
        $PageID = "Skyler's Boutique Homepage";
        break;

    case "about.php":
        $title = "About Skyler";
        $PageID = "About Me";
        break;

    case "tops.php":
        $title = "Tops";
        $PageID = "Tops";
        break;

    case "bottoms.php":
        $title = "Bottoms";
        $PageID = "Bottoms";
        break;

    case "dresses.php":
        $title = "Dresses";
        $PageID = "Dresses";
        break;

    case "accessories.php":
        $title = "Accessories";
        $PageID = "Accessories";
        break;

    case "faq.php":
        $title = "FAQ";
        $PageID = "FAQ";
        break;

    case "contact.php":
        $title = "Contact";
        $PageID = "Contact";
        break;

    default:
        $title = THIS_PAGE;
        $PageID = "";
}
?>
