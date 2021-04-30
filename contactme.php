<?php include 'includes/header.php';?>

<section>
    <h2 class="pageID">Contact Me</h2>
    <div class="contact">
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ohmgeeron@gmail.com";  //place your/your client's email address here
        $toName = "Veronica Gable"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</div>
<?php include 'includes/footer.php';?>