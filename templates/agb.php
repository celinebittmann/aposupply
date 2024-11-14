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
    <title>AGB
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
    <h1>Allgemeine Geschäftsbedingungen</h1>
    <br>


<h2 class="DAschrift">Diplomarbeit: Apo-Supply</h2>
<h5>Letzte Aktualisierung:</h5>
    <p class="design">xx.xx.2025</p>
    <br>

    <h3>Geltungsbereich:</h3>
      <p  style="text-align: justify;">Diese Allgemeinen Geschäftsbedingungen gelten für alle Dienstleistungen die angeboten werden.</p>
    <br>


    <h3>Haftungsbeschränkung:</h3>
      <p style="text-align: justify;">Apo-Supply übernimmt keine Haftung für indirekte Schäden, die durch die Nutzung der Dienstleistung entstehen. 
        Darüber hinaus haftet Apo-Supply nicht für Schäden, die durch Benutzer verursacht werden. 
        Die Nutzung von Apo-Supply erfolgt auf eigenes Risiko des Nutzers. 
        Der Nutzer trägt die volle Verantwortung für alle Schäden, die durch seine Nutzung von Apo-Supply entstehen.</p>
    <br>

    <h3>Änderungen der AGB:</h3>
      <p style="text-align: justify;">Apo-Supply behält sich das Recht vor, die Allgemeinen Geschäftsbedingungen jederzeit zu ändern.
        Die geänderten Bedingungen werden auf dieser Seite bekannt gegeben.</p>
    <br>

    <h3>Kontakt:</h3>
      <p>Zögern Sie bitte nicht, uns bei aufgekommenen Fragen zu kontaktieren unter: <a class="link" href="#">service@aposupply.digbizmistelbach.info</a></p>
      <br>


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

h3{
  font-weight: 550;
  font-style: italic;
}

.design:hover{
  text-decoration:underline;

}

.link{
  text-decoration: none;
  color: #00aaff;
  
}

.link:hover{
  text-decoration: underline;
  letter-spacing: 1px;
  font-weight: 600;
  color: #000000;
  
}




@keyframes example {
  0%   {letter-spacing:1px;}
  25%  {letter-spacing:1.3px;}
  50%  {letter-spacing:1.6px;}
  75%  {letter-spacing:2px;}
  100% {letter-spacing:2.1px;}
}

.DAschrift{
font-style: italic; 
letter-spacing: 1px; 
font-weight: 700;
}

.DAschrift:hover{
  position: relative;
  animation-name: example;
  animation-duration: 1s;
  animation-iteration-count: 1;

  letter-spacing: 2.1px;
}

</style>