<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Jesús & Andrés | Our Wedding</title>
    <link rel="icon" sizes="180x180" href="./img/wedding-rings.png">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="language-switch">
            <a href="index.php"><img src="./img/spain.png" alt="Español" title="Español"></a>
            <a href="index-en.php"><img src="./img/great_bratain.png" alt="English" title="English"></a>
        </div>
    <!-- HEADER SECTION -->
    <header>
        <div class="header-container">
            <div class="bg-section">
                <img src="./img/header.b.w.png" alt="Photo of Andrés and María Jesús showing the engagement ring">
                <div class="title-section">
                    <h1>WE’RE GETTING MARRIED</h1>
                    <img src="./img/wedding-rings-white.png" alt="White icon of wedding rings with a heart in the center">
                    <h2>Andrés & María Jesús</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- EVENT DETAILS SECTION -->
    <section class="detalles-section">
        <div class="detalles-container">
            <h2>It will be an honor to have you with us <br> on this very special day.</h2>
            <div class="hojas"></div>
            <div class="info-section">
                <div class="fecha">
                    <img src="./img/calendar.png" alt="White calendar icon">
                    <h3>The Big Day</h3>
                    <p>Saturday, March 28, 2026</p>
                </div>
                <div class="hora">
                    <img src="./img/clocky.png" alt="White clock icon">
                    <h3>The ‘I Do’ Moment</h3>
                    <p>3:00 PM</p>
                </div>
                <div class="fiesta">
                    <img src="./img/cheers.gray.png" alt="White icon of clinking glasses with a heart in the center">
                    <h3>Let the Celebration Begin</h3>
                    <p>4:30 PM</p>
                </div>
                <div class="ubicacion">
                    <img src="./img/location.gray.png" alt="White location icon">
                    <h3>BAR Y RESTAURANTE MATA DE CAÑA</h3>
                    <button class="btn"><a
                            href="https://www.google.com/maps/place/Bar+y+Restaurante+Mata+de+Ca%C3%B1a+Tarraz%C3%BA/@9.6217811,-84.0611205,17z/data=!3m1!4b1!4m6!3m5!1s0x8fa111a9583f542b:0x40f55306233f06df!8m2!3d9.6217811!4d-84.0585402!16s%2Fg%2F11jpctjc_0?entry=ttu&g_ep=EgoyMDI1MTAyNy4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">VIEW LOCATION</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- END EVENT DETAILS SECTION -->

    <!-- COUNTDOWN SECTION -->
    <section>
        <div class="countdown-timer">
            <p class="deadline-label"><span>Time left:</span></p>
            <ul class="countdown-timer-ul">
                <div class="countainer-ul">
                    <li class="date-item"><span class="days">0</span>Days</li>
                    <li class="date-item"><span class="hours">0</span>Hours</li>
                    <li class="date-item"><span class="minutes">0</span>Min</li>
                    <li class="date-item"><span class="seconds">0</span>Sec</li>
                </div>
            </ul>
        </div>
        <div class="separador"><img src="./img/corazon.png" alt="White hand-drawn heart icon"></div>
    </section>
    <!-- END COUNTDOWN -->

    <!-- GALLERY SECTION -->
    <section class="mobile-gallery">
        <h3>Our Moments</h3>
        <h3>Tap on the images to see them come to life.</h3>
        <div class="gallery-container">
            <img src="./img/gallery.jpg" alt="Photo 1">
            <img src="./img/gallery2.jpg" alt="Photo 2">
            <img src="./img/gallery3.jpg" alt="Photo 3">
            <img src="./img/gallery4.jpg" alt="Photo 4">
            <img src="./img/gallery5.jpg" alt="Photo 5">
            <img src="./img/gallery6.jpg" alt="Photo 6">
        </div>
        <h4>Each picture, a piece of our love story.</h4>

        <div class="line"></div>
    </section>
    <!-- END GALLERY SECTION -->

    <!-- DRESS CODE SECTION -->
    <section class="dress-section">
        <div class="dress-code">
            <h3>Dress Code: Semi-Formal</h3>
            <img src="./img/dresscode.gray.png" alt="White icon of suit and dress">
            <p>Our wedding palette will be in terracotta, orange, and beige tones.
                Please avoid wearing these colors to keep the harmony of the event.</p>
        </div>

        <div class="palette">
            <div class="color terracotta"></div>
            <div class="color naranja"></div>
            <div class="color beige"></div>
            <div class="color beige-claro"></div>
        </div>
        <div class="separador"><img src="./img/corazon.png" alt="White hand-drawn heart icon"></div>
    </section>
    <!-- END DRESS CODE SECTION -->

    <!-- VERSE SECTION -->
    <section class="frase">
        <div class="frase-container">
            <img src="./img/quatition.png" alt="Opening quotation mark" class="abrir">
            <p>Love is patient, love is kind. It does not envy, it does not boast, it is not proud. <br>
                It does not dishonor others, it is not self-seeking, it is not easily angered, <br>
                it keeps no record of wrongs. Love does not delight in evil but rejoices with the truth. <br>
                1 Corinthians 13: 4–6.</p>
            <img src="./img/quatition.png" alt="Closing quotation mark" class="cerrar">
        </div>
    </section>
    <!-- END VERSE SECTION -->

    <!-- RSVP SECTION -->
    <section class="rsvp-section">
        <h2 class="rsvp-title">We’ll Be Delighted to See You</h2>
        <p class="rsvp-text">
            Please fill out the form below and let us know if you’ll be joining us.
        </p>

        <div class="rsvp-options">
            <label class="option">
                <input type="radio" name="attendance" value="yes">
                <span class="custom-radio terracota"></span>
                Yes, I’ll Be There!
            </label>

            <label class="option">
                <input type="radio" name="attendance" value="no">
                <span class="custom-radio beige"></span>
                I Won’t Be Able to Attend
            </label>
        </div>

        <form class="rsvp-form" id="rsvpForm" action="guardar_rsvp.php" method="POST">
            <input type="number" name="cantidad" class="input-field small" placeholder="Guests" min="1" max="10" required>
            <input type="text" name="nombre" class="input-field" placeholder="Full name or family" required>
            <input type="text" name="apellido" class="input-field" placeholder="Last name or family" required>
            <textarea name="mensaje" class="input-field message" placeholder="Message"></textarea>

            <button type="submit" class="submit-btn">
                <img src="./img/wedding-rings-white.png" alt="White wedding rings icon">
                Send RSVP
            </button>

            <div class="form-alert" id="formAlert">Your message was sent successfully!</div>
            <!-- THANK YOU MESSAGE -->
            <div class="thank-you" id="thankYouMessage">
                💌 Thank you for confirming — we can’t wait to celebrate this special day with you!
            </div>
        </form>
    </section>
    <!-- END RSVP SECTION -->

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <img src="./img/just.married.png" alt="Terracotta just married car icon">
            <h3>Thank you for sharing this day with us</h3>
            <h4>With love, Andrés & María Jesús</h4>
        </div>
        <div class="separador"><img src="./img/corazon.png" alt="White hand-drawn heart icon"></div>
        <div class="credits">
            <p>Design & Development: María Jesús Jordan © 2025.</p>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="JS/script.js"></script>
</body>

</html>