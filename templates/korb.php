<?php
    // require(__DIR__.'/../includes.php');
?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warenkorb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/sportshop4dk/">
</head>
  <body>
    <?php
    require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br><br>
    <h1>Warenkorb</h1>
    <br><br>

    <?php 
    $korbVonKunde = getKorbVonKunde($userId); 

    foreach($korbVonKunde as $korbVonKundeAnzeige):?> 
        <div class="row">             
      
         <div class="col-3"> 
<?php echo '<img height="150" width="200" src="data:image/jpeg;base64,'.base64_encode( $korbVonKundeAnzeige['bild'] ).'"/>'; ?> 
</div> 
<div class="col-6"> 
  <div><?= $korbVonKundeAnzeige['name']?></div> 
  <div><?= $korbVonKundeAnzeige['beschreibung'] ?></div> 
  <div>Menge: <?= $korbVonKundeAnzeige['anzahl'] ?></div> 
  <!-- zwei Buttons -->
  <a href="functions/korb2.php?addiereZumWarenkorb=<?= $korbVonKundeAnzeige['p_id']?>"  
      class="btn btn-success col-3">+ 1</a> 
      <a href="functions/korb2.php?subVonWarenkorb=<?= $korbVonKundeAnzeige['p_id']?>"  
      class="btn btn-warning col-3">- 1</a>
    </div>
  <div class="col-3 text-end">
  <div style="color:red;"><?= $korbVonKundeAnzeige['preis'] *$korbVonKundeAnzeige['anzahl'] ?> € </div> 
</div>    
      </div> <!-- Ende row --> 
<br>
<hr>
  <?php endforeach;?>
<br>

<div class="row"> 
    <div class="col-12 text-end">
      Summe (<?= $korbzahl ?> Artikel) <?= $korbSumme ?> €
    </div>  
</div> 

<div>
<a href="templates/bezahlen.php" class="btn btn-primary col-12">Zur Kassa gehen</a> 
<br>
    </div>

</div><!--ende container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>