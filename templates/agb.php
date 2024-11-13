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
    <h1>AGB</h1>
    <br>


<h2 style="font-style: italic; letter-spacing: 1px; text-align: justify; font-weight: 700;">Diplomarbeit: Apo-Supply</h2>
<h3>Erstellt von:</h3>
    <p class="design">Celine Bittmann</p>
    <p class="design">Anja Brüstl</p>

 
    <p style="text-align: justify;">Diese Diplomarbeit wird ausschließlich für akademische Zwecke angefertigt. Aktuell liegt keine Intention zur Erzielung von Gewinnen vor, und es werden keine Umsätze generiert. 
    Ziel der Arbeit ist es, Kenntnisse zu vertiefen und wissenschaftliche Methoden anzuwenden. Jegliche wirtschaftliche Verwertung oder kommerzielle Nutzung steht derzeit nicht im Fokus und ist nicht beabsichtigt. 
    Die Ausarbeitung dient lediglich der Vertiefung des Fachwissens und der akademischen Weiterentwicklung der Verfasserinnen.</p> 
    <br>


    <h3>Kontakt:</h3>
      <p class="design">E-Mail: service@aposupply.digbizmistelbach.info <br>
      Telefon: 02572/2305-350</p>
    <br>


    <h3>Rechtliche Hinweise:</h3>
      <h4 style="font-style: italic; letter-spacing: 1px; text-align: justify; font-weight: 550;">Inhaltlich verantwortlich:</h4>
        <h6 class="design">Celine Bittmann
        <br>Straße , 2170 Poysdorf</h6>
        <h6 class="design">Anja Brüstl
        <br>Obere Kellergasse 75, 2132 Hörersdorf</h6>
        <br>

    <h3>Haftungsausschluss:</h3>
      <p style="text-align: justify;">Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.</p>


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



</style>