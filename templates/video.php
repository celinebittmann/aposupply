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
    <title>Erklärvideo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
  </head>
  <br><br><br>
<body>
    <?php
     require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>

<div class="container">
<br>
<h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Erklärvideo</h1>
<br>
    

<div class="row">
  <div class="col-7">
    <p style="text-align: justify;">Nehmen Sie sich kurz Zeit, um sich unser Video über die App "Apo-Supply" anzuschauen und das Konzept dahinter besser zu verstehen.
    </p>
    <p style="text-align: justify;">Das Video beinhaltet alle Tipps & Tricks zur Nutzung.
    </p>
    <p style="text-align: justify;">Viel Spaß!
    </p>
  </div>

  <div class="col-1">
  </div>

  <div class="col-3">
    <img src="assets/img/erklären.png" width="auto" height="180" alt="Frau erklärt einem Mann etwas">
  </div>
</div>

</div> <!-- ende container -->



<!-- Wellen von Index, Konsistenz, Benutzer erkennt, dass Wellen auch auf index-Seite waren-->
<div class="wellen" style="position: relative;">
  <!-- Erste Welle -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="rgba(0,170,255,0.3)" fill-opacity="1" d="M0,160L48,158C96,156,192,152,288,160C384,168,480,190,576,190C672,190,768,160,864,160C960,160,1056,190,1152,195C1248,200,1344,180,1392,170L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  
  <!-- Zweite Welle -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="rgba(0,170,255,0.3)" fill-opacity="1" d="M0,160L40,162.7C80,165,160,170,240,160C320,150,400,120,480,115C560,110,640,130,720,135C800,140,880,130,960,135C1040,140,1120,155,1200,160C1280,165,1360,165,1400,165L1440,165L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z" transform="scale(1, -1) translate(0, -320)"></path>
  </svg>

  <!-- Weißes Rechteck mit Video -->
  <div style="
    position: absolute;
    top: 50%; 
    left: 50%; 
    transform: translate(-50%, -50%);
    width: 600px; 
    height: auto; 
    background-color: white; 
    border-radius: 10px; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    text-align: center;">
    <video controls style="width: 100%; border-radius: 10px;">
       <!-- JIER VIDEO EINFÜGEN -->
      <source src="assets/img/" type="video/mp4">
      Ihr Browser unterstützt dieses Video-Format nicht.
    </video>
    <p style="margin-top: 5px; font-style: italic; color: #555;">Video ist vergrößerbar</p>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <?php
    include "../templates/footer.php";
  ?>


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
</style>

</html>
