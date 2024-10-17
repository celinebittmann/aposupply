<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

// session_start();

require "../functions/database.php";

$sql = "SELECT * FROM produkte";
$andi = $dbh->query($sql);
$row = $andi->fetch()

?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sportshop 4DK
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/aposupply/">
  </head>
  <body>


    <?php
    require(__DIR__.'/../includes.php');
    require "navbar.php";
    ?>

    <div class="container">
    <br><br>
    <h1>Details</h1>


<div class="card h-100">
<div class="row">
    <div class="col col-4">
    <?php echo "<img height='auto' width='auto' src='data:image/jpeg;base64,".base64_encode($row['bild'])." '>"  ?> 
    </div>

    <div class="col col-8">
        <div class="container">
        <div class="card">
        <div class="card-title"><?= $row['name']; ?></div>
        <div class="card-body">
          <h5>€ <?php echo $row['preis'] ?></h5>
          <h5><?php echo $row['beschreibung'] ?></h5>
      </div>
      <div class="card-footer">
        <a button class="btn btn-primary btn-sm"  href="shop.php">Zurück</button> </a>
        &nbsp;
        <a button class="btn btn-success btn-sm"  href="templates/warenkorb.php">In den Warenkorb</button> </a>
      </div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>