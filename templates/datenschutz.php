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
    <title>Datenschutzerklärung
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
</head>
  <body>
    <?php
    //  require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Datenschutzerklärung</h1>
    <br>

    

<h2 class="DAschrift">Diplomarbeit: Apo-Supply</h2>
<h5>Letzte Aktualisierung:</h5>
    <p class="design">xx.xx.2025</p>
    <br>

    <h3>Einführung:</h3>
      <p style="text-align: justify;">Ihr Apo-Supply Team nimmt den Schutz Ihrer persönlichen Daten sehr ernst. 
        Diese Datenschutzerklärung zeigt, wie wir Ihre personenbezogenen Daten verwalten, wie wir sie verwenden und schhützen.</p>
      <br>


    <h3>Ihre Daten:</h3>
      <p>Wir verwalten ausschließlich die Informationen, die Sie uns beim Registrierungsprozess in der App oder bei der Kommunikation mit uns zur Verfügung stellen. 
        Dazu gehören Name, E-Mail Adresse, gegebenenfalls Wohnort und andere persönliche Daten. 
        Ihre Daten werden für unsere Dienste, Verbesserungen der App oder Website oder für die Kommunikation verwendet.</p>
      <br>

    <h3>Datenschutz:</h3>
      <p>Wir ergreifen geeignete Sicherheitsvorkehrungen, um Ihre Daten vor unbefugtem Zugriff und Missbräuchen zu schützen. 
        Sie haben das Recht, Informationen über Ihre gespeicherten Daten anzufordern, Korrekturen vorzunehmen, die Daten löschen zu lassen oder die Verarbeitung einzuschränken.</p>
      <br>

    <h3>Kontakt:</h3>
      <p>Zögern Sie bitte nicht, uns bei aufgekommenen Fragen zu kontaktieren unter: <a class="link" href="#">service@aposupply.digbizmistelbach.info</a></p>
      <br>
<!-- Link so machen dass outlook aufgeht -->

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

/* Unterstrichene Texte */
.design:hover{
  text-decoration:underline;

}


/* Links */
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