<?php
 require __DIR__.'/../includes.php';

 // ist man bereits eingeloggt? 
if(!isLoggedIn()) 
{ 
  header('Location: login.php'); 
  exit(); 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rechnung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/aposupply/">
    </head>
  <body>
<?php

require "navbar.php";
?>
<div class="container"> <!-- Anfang container -->
<br><br>
<h1>Rechnung</h1>

<div class="pdf container">

  <section class="row" id="firmenlogo">  </section> 

  <section class="row" id="firmendetails"> 
    <h2>Sportshop 4DK, E.F.Promenade 1, 2130 Mistelbach</h2>
  </section>
      
  <section class="row" id="empfaenger"> 
    <h4 style="padding-top:60px">Empfänger</h4>
  </section> 

  <section class="row" id="rechnungsdatum"> 

  </section> 

  <section class="row" id="rechnungsnummer">  </section> 
  <section class="row" id="rechnungsheader"> </section> 

  <section class="row" id="produkte">
    <table> 
      <thead>
        <tr> 
          <th>Pos.</th> 
          <th>Bezeichnung</th> 
          <th>Menge</th> 
          <th>Einzel</th> 
          <th>Gesamt</th> 
        </tr> 
      </thead>  
        
      <tbody>
        <?php foreach($orderData['products'] as $order):?> 
        <?= $order['name']?> 
        <?= $order['anzahl']?> 
        <?= $order['preis']?> 
        <?= $order['ust']?>
        <?php endforeach; ?>
      </tbody>
    </table> 
  </section> <!--Ende section produkte -->

  <section class="row" id="summe"> </section> 
  <section class="row" id="firmenfooter"> </section> 

 </div>  <!--Ende pdf container -->



<br><br>
<a class="btn btn-primary" href="index.php">Zurück zur Startseite</a>

</div> <!-- Ende container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>