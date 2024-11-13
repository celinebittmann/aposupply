<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
</head>
  <body>
    <?php
     require __DIR__.'/../includes.php'; 
    ?>
  </body>



<footer>
  <div class="container">
  <br><br>
    <div class="row center">

      <div class="col-3">
        <h5>Wichtige Links</h5>
        <br>
        <p><a class="link" href="templates/impressum.php">Impressum</a></p>
        <p><a class="link" href="templates/agb.php">AGB</a></p>
        <p><a class="link" href="templates/datenschutz.php">Datenschutz</a></p>
        <p><a class="link" href="templates/???.php">...</a></p>
      </div>

<div class="col-1">
</div>


      <div class="col-3">
        <h4>Apo-Supply</h4>
        <br>
        <p>Edmund-Freibauer-Promenade 1</p>
        <p>2132 Mistelbach</p>
        <p>02572/2305-350</p>
        <p>service@aposupply.digbizmistelbach.info</p>
      </div>

<div class="col-1">
</div>

      <div class="col-3">
        <h5>Weitere Links</h5>
        <br>
        <p><a class="link" href="templates/kontakt.php">Kontakt</a></p>
        <p><a class="link" href="templates/team.php">Über uns</a></p>
        <p><a class="link" href="templates/qa.php">Q&A</a></p>
        <p><a class="link" href="templates/app.php">App</a></p>
      </div>

    </div>
  </div>
  <br><br>
</footer>




<style>
footer{
  background-color: #202731;
  color: white;
}

.center{
  text-align: center;
}

h4{
  font-weight: 700;
}


.link{
  text-decoration: none;
  color: white;
  
}

.link:hover{
  text-decoration: underline;
  color: #00aaff;
  
}


</style>