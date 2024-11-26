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
    <title>Impressum
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
</head>
<br><br><br>
  <body>
    <?php
    //  require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Impressum</h1>
    <br>


<h2 class="DAschrift">Diplomarbeit: Apo-Supply</h2>
<h3>Erstellt von:</h3>
    <p class="design">Celine Bittmann</p>
    <p class="design">Anja Brüstl</p>

 
    <p style="text-align: justify;">Diese Diplomarbeit wird ausschließlich für akademische Zwecke angefertigt. 
      Aktuell liegt keine Intention zur Erzielung von Gewinnen vor, und es werden keine Umsätze generiert. 
      Ziel der Arbeit ist es, Kenntnisse zu vertiefen und wissenschaftliche Methoden anzuwenden. 
      Jegliche wirtschaftliche Verwertung oder kommerzielle Nutzung steht derzeit nicht im Fokus und ist nicht beabsichtigt. 
      Die Ausarbeitung dient lediglich der Vertiefung des Fachwissens und der akademischen Weiterentwicklung der Verfasserinnen.</p> 
    <br>

    <h3>Rechtliche Hinweise:</h3>
      <h4 style="font-style: italic; letter-spacing: 1px; text-align: justify; font-weight: 550;">Inhaltlich verantwortlich:</h4>
        <h6 class="design">Celine Bittmann
        <br>Millenniumsstraße 40 , 2170 Poysdorf</h6>
        <h6 class="design">Anja Brüstl
        <br>Obere Kellergasse 75, 2132 Hörersdorf</h6>
        <br>

    <h3>Haftungsausschluss:</h3>
      <p style="text-align: justify;">Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. 
        Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.</p>
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


/* farbverlauf*/
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