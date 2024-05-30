<?php
define('TITLE', 'Tiny Care :: Events');
$page='events';
include('templates/header.php');
?>
<main>
    <div class="events">
        <h2>Having Fun all Year Long is our Goal!</h2>
        <h3>Events coming up this month</h3>
        <iframe
            src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%239E69AF&ctz=America%2FLos_Angeles&showTitle=0&mode=MONTH&showDate=1&title=Tiny%20Care%20Events&src=ZDg4YWM5NzE1OGRhOTRlNDM3MzIzZGI2YzQ2M2M4MWZjOTI4NzYxNmQ5YmJiM2RlOTljMzg0MDBjYWUyMTUwOUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23B39DDB&color=%234285F4"
            style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>


        <h3>Gallery:</h3>
        <!-- Slideshow -->
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="./Images/education2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="./Images/fun2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="./Images/education4.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="./Images/education5.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>

        <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        </script>

</main>

<!-- Footer -->
<?php
include('templates/footer.html');
?>