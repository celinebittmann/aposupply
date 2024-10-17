<?php

require __DIR__.'/../includes.php';

$korbVonKunde = getKorbVonKunde($userId); 

createAuftrag($userId,$korbVonKunde);//kopiert warenkorb
clearWarenkorb($userId);//löscht warenkorb
?>




<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/aposupply/">
</head>
  <body>

    <?php
    // require __DIR__.'/../includes.php';
    require "navbar.php";
    ?>
    <div class="container">

    <br><br>
    <h1>Vielen Dank für Ihren Einkauf.</h1>
    </div>
    <br>
    <br>
    <a class="btn btn-primary" href="index.php">Zurück zur Startseite</a>    
    <a class="btn btn-success" href="templates/rechnung.php?nummer=<?php echo $_SESSION['auftragId']?>">Rechnung ansehen</a>



</div> <!-- ende container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
