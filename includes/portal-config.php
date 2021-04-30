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

    case 'index.php':
        $title = "Veronica's IT 162 Portal";
        $logo = 'fa-heart';
    break;

    case 'contactme.php':
        $title = "Veronica's IT 162 Contact Page";
        $logo = 'fa-envelope';
        $logo_color = ' style="color:#FFB6C1"';
    break;

    case 'aia.php':
        $title = "Veronica's IT 162 AIA Page";
        $logo = 'fa-search';
        $logo_color = 'style="color:#778899"';
    break;

    case 'flowchart.php':
        $title = "Veronica's IT 162 Flow Chart";
        $logo = 'fa-object-group';
        $logo_color = 'style="color:#9370DB"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-object-group';
        $logo_color = '';
    }

$nav1['index.php']="Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Veronica";

/*creating a function to generate links and keep highlight on current page

 <li><a href="index.php" class="selected">Home</a></li>
          <li><a href="big/index.php">Big</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart & Layout</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Me</a></li>

*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){

    if($url == THIS_PAGE){
        $myReturn .= "<li><a class=\"selected\"href=\"$url\">$text</a></li>";
    }else{
        $myReturn .= "<li><a href=\"$url\">$text</a></li>";
    }
    
    }
    return $myReturn;
}

?>
