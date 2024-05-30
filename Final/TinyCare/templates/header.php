<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php //Print the page title.
        if (defined('TITLE')){//Is the title defined?
            Print TITLE;
        }else{//The title is not defined.
            print 'Tiny Care';
        }
        ?></title>
        <script src="https://kit.fontawesome.com/28f9e64318.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles/styles.css">
        <link rel="stylesheet" href="./styles/slideShow.css">

        <link rel="icon" href="./images/tIcon.ico">
    </head>

    <body>
        <div id="wrapper">
            <Header>
                <h1><a href="index.php">Tiny Care</a></h1>
            </Header>

            <nav>
                <ul>
                    <li class="<?php if($page=='home'){echo 'navActive';}?>"><a href="index.php">Home</a><br></li>
                    <li class="<?php if($page=='about'){echo 'navActive';}?>"><a href="aboutUs.php">About Us</a></li>
                    <li class="<?php if($page=='testimonials'){echo 'navActive';}?>"><a
                            href="testimonials.php">Testimonials</a></li>
                    <li class="<?php if($page=='events'){echo 'navActive';}?>"><a href="events.php">Events</a></li>
                    <li class="<?php if($page=='contact'){echo 'navActive';}?>"><a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </nav>