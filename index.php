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
    <title>Apo-Supply</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <?php
    require(__DIR__ . '/includes.php');
    require "templates/navbar.php";
    include "index.js";
    
    ?>
    <div class="container">
    <br>
    <h1>Willkommen bei Apo-Supply!</h1>
    <br>


<div class="row">
  <div class="col-6">
    <p style="font-style: italic; letter-spacing: 1px; text-align: justify;">Wir freuen uns, Sie auf unserer Seite begrüßen zu dürfen.</p>
    <p style="text-align: justify;">Ihre Gesundheit und Ihr Wohlbefinden stehen bei uns an erster Stelle. Unsere Plattform stellt sicher, dass Sie stets Zugriff 
      auf aktuelle und verlässliche Informationen haben. Wir bieten detaillierte Produktbeschreibungen, Anwendungsinformationen und Hinweise zur sicheren Verwendung.
      Wir sind bestrebt, Ihnen eine benutzerfreundliche und informative Plattform zu bieten. Unser motiviertes Team arbeitet kontinuierlich daran, 
      Ihnen die bestmöglichen Informationen zur Verfügung zu stellen und Ihre Fragen kompetent zu beantworten.
    </p>
    <br>
    <p style="text-align: justify;">Dank der vielen ehrlichen Antworten unsere Umfrage, konnten wir eine erfolgreiche Website und App gestalten, die den Personen bei der 
      Medikamentenverwaltung helfen soll. 
    </p>
  </div>

  <div class="col-1">
  </div>

  <div class="col-4">
    <img src="assets/img/startseite_frau.png" width="400" height="400" alt="Frau mit Medikamenten">
  </div>
</div>


<br>



<!-- laufende nummer eberhart fragen -->
<div class="counter-container">
  <div class="row">
    <div class="col-2">
      <div id="counter-number" class="number">0</div>
      <div id="label-number" class="label">followers</div>
    </div>
  
    <div class="col-1"></div>

    <div class="col-2">
      <div id="counter-number" class="number">0</div>
      <div id="label-number" class="label">followers</div>
    </div>

    <div class="col-1"></div>

    <div class="col-2">
      <div id="counter-number" class="number">0</div>
      <div id="label-number" class="label">followers</div>
    </div>

    <div class="col-1"></div>

    <div class="col-2">
      <div id="counter-number" class="number">0</div>
      <div id="label-number" class="label">followers</div>
    </div>
  </div>
</div>



<br><br>

<!-- Infobox -->
<div class="card" style="background-color: #fff;">
  <div class="card-header" style="font-size: 40px; font-weight: 700; text-align: center;">
    Unser Service
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-6">
        <button class="btn title"><h4 class="ueberschrift_card">Aktueller Lagerbestand</h4><p class="text_card">In unserer App können Sie sich jederzeit den aktuellen Bestand Ihrer Medikamente ansehen!</p></button>
      </div>
      <div class="col-6">
        <button class="btn title"><h4 class="ueberschrift_card">Erinnerungen</h4><p class="text_card">Sie erhalten immer Benachrichtigungen, sobald Sie ein Medikament zu sich nehmen müssen.</p></button>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-6">
        <button class="btn title"><h4 class="ueberschrift_card">Mobile App</h4><p class="text_card">Downloaden Sie unsere App auf Ihr Handy um Ihren Medikamentenbestand immer dabei zu haben.</p></button>
      </div>
      <div class="col-6">
        <button class="btn title"><h4 class="ueberschrift_card">Nachbestellen</h4><p class="text_card">Sobald Sie ein Medikament beinahe aufgebraucht haben, bekommen Sie eine Benachrichtigung, um rechzeitig wieder etwas nachzukaufen!</p></button>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-6">
        <button class="btn title"><h4 class="ueberschrift_card">Nachhaltigkeit</h4><p class="text_card">Da Sie mit unserer App Ihren Datenstand online haben, werden übermaßige Käufe vermieden.</p></button>
      </div>
      <div class="col-6">
        <button class="btn title"><h4 class="ueberschrift_card">??</h4><p class="text_card">??</p></button>
      </div>
    </div>

  </div>
</div>

</div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(0,170,255,0.3)" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,117.3C384,128,480,160,576,160C672,160,768,128,864,128C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(0,170,255,0.3)" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,117.3C384,128,480,160,576,160C672,160,768,128,864,128C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>




<br><br><br><br><br>



    <script src="index.js"></script>
    <script src="index copy.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>



  <?php
    include "templates/footer.php";
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

 
/* laufende Nummern */
*{
  font-family: sans-serif;
}

.counter-container{
  margin: 60px;
  text-align: center;
}

.counter-container .number{
  font-size: 100px;
}

.counter-container .num{
  font-size: 100px;
}

.counter-container .label{
  font-size: 52px;
  margin-top: -30px;
}



/* Service card */
.ueberschrift_card{
  text-align: left;
  font-weight: 700;
  font-size: 25px;
}

.text_card{
  text-align: left;
  font-size: 18px;
}

.btn{
  background-color: rgba(0,170,255,0.2);
}

.btn:hover{
  background-color: rgba(0,170,255,0.3);

 
}





</style>
  </html>