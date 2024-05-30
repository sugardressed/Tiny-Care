<?php
define('TITLE', 'Tiny Care :: Confirmation');
include('templates/header.php');
//Error Checker
ini_set('display_errors',1);
error_reporting(E_ALL);

// Initial Variables
$fName=$_POST['fName'];
$phone=$_POST['phone'];
$tfName=trim($fName);
$tfName=ucwords($tfName);
$tfName=htmlspecialchars($tfName);
?>

<body>
    <div class="contactConf">
        <h2>Thank You</h2>

        <?php
    // Select to subscribe
    if(isset($_POST['nLetter'])) {
        // If selected subscription message.
        $topping=$_POST['nLetter'];
         //Print user information and final cost.
        print "Thank you for your interest in our programs $tfName!<br><br>\n";
        print "You have subscribed to our monthly news letter.<br><br>\n";
        print "One of our teachers will contact you within the next 24 business hours.<br>\n";
    } 
    else{
        //If no subscription message.
        print "<br>Thank you interest in our programs $tfName!<br><br>\n";
        print "One of our teachers will contact you within the next 24 business hours.<br>\n";
    }
        ?>
    </div>
</body>


<?php
include('templates/footer.html');
?>