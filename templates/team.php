<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

// session_start();
?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
  </head>
  <body>
    <?php
     require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1>Team</h1>
</div>
    <br>
    <div class="container">
        <p style="font-style: italic; letter-spacing: 1px; text-align: justify;">
        Wir sind wir!
</p>
  <p style="text-align: justify;">Die starke Arbeitsdynamik, die sich zwischen Anja & Celine dank ihrer unterschiedlichen Persönlichkeiten in den letzten Jahren entwickelt hat, schafft eine produktive Arbeitsumgebung. Sie sind dadurch in der Lage, Herausforderungen gemeinsam anzugehen, Entscheidungen zu treffen und effektiv zu kommunizieren, was für den Erfolg von Apo-Supply von entscheidender Bedeutung ist.
Ein weiterer wichtiger Aspekt ist ihre Leidenschaft und Motivation für ihr Unternehmen. Sie haben eine gemeinsame Vision für APO-SUPPLY sind durchaus bereit, zusätzliche Arbeit und Opfer zu bringen, die für den Aufbau eines erfolgreichen Unternehmens, wie dieses es werden wird, erforderlich sind. 
   </p>
  </div>
  <br><br>

<div class="container text-center">
  <div class="row">
    <div class="col position-relative">
      <div class="overlay">
        <a href="https://github.com/celinebittmann" target="_blank">
          <img src="assets/img/github_logo.jpg" alt="GitHub Icon" style="width: 16px; height: 16px; margin-right: 5px;">
          GitHub - Celine Bittmann
        </a>
      </div>
      <img src="assets/img/celi2.jpg" class="img-small animated-slide-in-left img-hover-zoom" alt="Bild von Celine">
      <h3 style="margin-top: 15px;">Celine Bittmann</h3>
      <p>Innovative Denkerin und passionierte Entwicklerin.</p>
    </div>
    <div class="col position-relative">
      <div class="overlay">
        <a href="https://github.com/anjabruestl" target="_blank">
          <img src="assets/img/github_logo.jpg" alt="GitHub Icon" style="width: 16px; height: 16px; margin-right: 5px;">
          GitHub - Anja Brüstl
        </a>
      </div>
      <img src="assets/img/celi1.jpg" class="img-small animated-slide-in-right img-hover-zoom" alt="Bild von Anja">
      <h3 style="margin-top: 15px;">Anja Brüstl</h3>
      <p>Kreative Planerin mit einem Gespür für Details.</p>
    </div>
  </div>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <!-- Hintergrundfarbe & -verlauf -->
  <style>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: linear-gradient(90deg, #e6f9ff, #d7f8fe, #6ae8fe, #e6f9ff, #d7f8fe);
    background-size: 200% 200%;
    animation: gradientMove 12s linear infinite;
}

@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}



.img-small {
    width: 30%;
    height: auto;
    transition: transform 0.3s ease-in-out;
}

.animated-slide-in-left {
    animation: slideInLeft 2s ease-out;
}

.animated-slide-in-right {
    animation: slideInRight 2s ease-out;
}

@keyframes slideInLeft {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideInRight {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

.img-hover-zoom:hover {
    transform: scale(1.1); /* Vergrößert das Bild beim Hover */
}

.position-relative {
    position: relative;
    display: inline-block;
}

.overlay {
    position: absolute;
    top: -40px; /* Platziert das Overlay oberhalb des Bildes */
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(255, 255, 255, 0.9);
    padding: 5px 10px;
    border-radius: 5px;
    display: none; /* Standardmäßig ausgeblendet */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    z-index: 10; /* Stellt sicher, dass das Overlay über dem Bild bleibt */
}

.position-relative:hover .overlay {
    display: block; /* Zeigt das Overlay an, wenn die Maus über dem Bild ist */
}

.overlay a {
    text-decoration: none;
    color: #333;
    font-size: 0.9rem;
}

.overlay img {
    vertical-align: middle;
}


</style>



</html>