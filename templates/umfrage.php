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
    <title>Umfrage-Ergebnisse
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css" >
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
    <h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Unsere Umfrage-Ergebnisse</h1>
    <br>



<div class="row">
  <div class="col-7">
    <p style="font-style: italic; letter-spacing: 1px; text-align: justify;">Auswertung der Antworten</p>
    <p>Wir haben gemeinsam Mitte September damit begonnen, eine Umfrage zur Medikamentenverwaltung an unsere Bekannten weiterzuleiten, um genügend Antworten zu erhalten.
        Ende Oktober schlossen wir die Umfrage, um keine weiteren Änderungen zu bekommen und keine Ergebnisse zu fälschen. 
    </p>
  </div>

  <div class="col-1">
  </div>

  <div class="col-3 image-container" style="position: relative;">
    <img id="clickableImage" src="assets/img/umfrage.png" width="500" height="300" style="width: 300px; height: auto; border-radius: 10px; cursor: pointer;" alt="Frau mit Medikamenten">
  </div>


  

</div>









<br><br><br><br>

    

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <?php
    include "footer.php";
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

.link{
  text-decoration: underline;
  color: #00aaff;
  
}

/* Verzögerungseffekt */
.accordion-body {
  animation: sweep .7s ease-in-out;}

@keyframes sweep {
  0%    {opacity: 0; margin-left: -20px}
  100%  {opacity: 1; margin-left: 0px}
}


.accordion-button{
  background-color: rgba(0,170,255,0.1);
  font-size: 12pt;
  font-weight: 600;
}

.accordion-button:not(.collapsed){
  background-color: rgba(0,170,255,0.3);
  font-size: 12.5pt;
  font-weight: 700;
  letter-spacing: 1px;
}
















</style>

</html>