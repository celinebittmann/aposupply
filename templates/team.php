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
  <p style="text-align: justify;">Die starke Arbeitsdynamik, die sich dank ihrer unterschiedlichen Persönlichkeiten und Fachkenntnisse in den letzten Jahren entwickelt hat, schafft eine produktive Arbeitsumgebung. Sie sind dadurch in der Lage, Herausforderungen gemeinsam anzugehen, Entscheidungen zu treffen und effektiv zu kommunizieren, was für den Erfolg ihres Unternehmens von entscheidender Bedeutung ist.
Ein weiterer wichtiger Aspekt ist ihre Leidenschaft und Motivation für ihr Unternehmen. Anja und Celine haben eine gemeinsame Vision für APO-SUPPLY sind durchaus bereit, zusätzliche Arbeit und Opfer zu bringen, die für den Aufbau eines erfolgreichen Unternehmens, wie dieses es werden wird, erforderlich sind. 
   </p>
  </div>
  <br><br>
  

  <div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
      <img src="assets/img/celi1.jpg" class="card-img-top" alt="Bild überfüllter Apothekenschrank" style="width: 30%; height: auto;">
    </div>
    <div class="col">
      2 of 2
      <img src="assets/img/anja.jpg" class="card-img-top" alt="Bild überfüllter Apothekenschrank" style="width: 30%; height: auto;">
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
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
</style>

</html>