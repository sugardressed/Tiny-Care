<?php
define('TITLE', 'Tiny Care :: Contact Us');
$page='contact';
include('templates/header.php');

?>

<main>
    <div class=tContact>
        <h2>Contact Us</h2>
        <h3>For more information about our programs, or to schedule a tour of the school, please fill out the form below
            or call us directly at <b><a href="tel:858-111-1111">858.111.1111</a></b></h3>


        <p>Required*</p>
        <form action="confirmation.php" method="post">

            <title>Family Information</title>
            <label for="fName">First Name*</label>
            <input type="text" id="fName" name="fName" required>
            <label for="myLName">Last Name*</label>
            <input type="text" id="myLName" name="myLName" required>
            <label for="myEmail">Email*</label>
            <input type="email" id="myEmail" name="myEmail" required>
            <label for="phone">Phone*</label>
            <input type="tel" name="phone" id="phone" required>
            <label for="myComments">Comments:</label>
            <textarea name="myComments" id="myComments" cols="30" rows="2"></textarea>
            <div class="subscribe">
                <label for="nLetter">Subscribe to our news letter!
                    <input type="checkbox" name="nLetter" id="nLetter" value="Subscribe to news letter"><br>
                    <span class="checkmark"></span>
                </label>
            </div>
            <input type="submit" value="Submit">
        </form>

        <div id="contact">
            <p>
                <span class="dCare">Tiny Child Care</span> <br>
                123 Border St <br>
                San Diego, CA 90123 <br>
            </p>
        </div>
    </div>

</main>


<?php
include('templates/footer.html');
?>