
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bezahlen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/aposupply/">
</head>
  <body>
    <?php
  require __DIR__.'/../includes.php';   
   

    // ist man bereits eingeloggt? 
    if(!isLoggedIn()) 
    { 
     header('Location:  login.php'); 
    exit(); 
    }
    

     require "navbar.php";
     ?>

    <div class="container">
    <br><br>
    <div class="row"> 
    <h1>Bezahlung und Bestellung</h1>
  </div>
  <div class="row"> 
<h3>Bezahlung:</h3> 
<p>Unsere AGB sehen eine Barzahlung bei Abholung vor. Gerne können Sie jedoch auch Ihre Bestellung voraus bezahlen. Überweisen Sie den Gesamtbetrag auf unser Geschäftskonto bei der Raiffeisenbank Mistelbach mit folgendem IBAN: AT32 3200 0000 7401 1234.</p> 
</div> 
<br> 
<hr> 
<br> 

<div class="row"> 
<h3>Gesamtbetrag der Bestellung:</h3> 
</div> 
<div class="row"> 
<div class="col col-md-7"> 
<p>zu zahlender Gesamtbetrag:</p> 
  </div>
<div class="col col-md-5">
<div class="col col-md-4">
<?php 
          // Funktion aus der korb2.php 
          $korbZahl = countProdukte($userId); 
          // Funktion für Summe auch aus korb2.php 
          $korbSumme = getSummeFuerUserId($userId); 
  ?> 
          Die Summe beträgt: (<?= $korbZahl ?>): <?= $korbSumme ?> € 
        </div> 
        </div> 
        </div> 
     <br>
        <a class="btn btn-danger" href="index.php">Abbrechen</a>     
        <a class="btn btn-success" href="templates/danke.php">Kostenpflichtig bestellen</a> 
    

</div><!--ende container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>