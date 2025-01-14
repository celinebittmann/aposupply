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
    <title>Umfrage-Ergebnisse
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">
    <link href="../functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css" >
    <base href="/aposupply/">
</head>
<br><br><br>
  <body>
    <?php
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1 style="font-weight: 700; letter-spacing: 0.5px; ">Unsere Umfrage-Ergebnisse</h1>
    <br>



<div class="row">
  <div class="col-8">
    <p style="font-style: italic; letter-spacing: 1px; text-align: justify;">Auswertung einiger Antworten</p>
    <p style="text-align: justify;">Wir haben gemeinsam Mitte September damit begonnen, eine Umfrage zur Medikamentenverwaltung an unsere Bekannten weiterzuleiten, 
      um genügend Antworten zu erhalten. Mitte Oktober schlossen wir die Umfrage, um keine weiteren Antworten mehr zu bekommen und somit keine Änderungen mehr vornehmenzumüssen.
      An der Umfrage nahmen 49 verschiedene Personen teil, in den Altersgruppen von "unter 18", "18-30", "30-40", "40-50", "50-60" und "über 60", wobei die meisten
      Teilnehmer und Teilnehmerinnen aus der Altergruppe zwischen 18 und 30 stammen. 
      Um nun ein geeignetes Programm zu zaubern, mussten wir die Daten unserer Befragten auswerten, und hier sind einige Ergebnisse...
    </p>
  </div>

  <div class="col-1">
    <!-- <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
    </div> -->
  </div>

  <div class="col-3 image-container" style="position: relative;">
    <img id="clickableImage" src="assets/img/umfrage.png" width="500" height="300" style="width: 300px; height: auto; border-radius: 10px; cursor: pointer;" alt="Frau mit Medikamenten">
  </div>
</div> <!-- Ende row -->

<br><br><br>


<!-- 1. Auswertung -->
 <div class="hintergrund">
<h4 style="font-weight: 700; letter-spacing: 0.5px;">"Wie zufrieden sind Sie mit der Verwaltung von Ihren Medikamenten?"</h4>

<div class="progress-stacked">
  <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
    <div class="progress-bar" style="background-color: #ff6600; color: black; font-weight: 700; font-size: 17px;">12%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%;">
    <div class="progress-bar" style="background-color: #ff8b3d; color: black; font-weight: 700; font-size: 17px;">4%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width: 37%;">
    <div class="progress-bar" style="background-color: #777777; color: black; font-weight: 700; font-size: 17px;">37%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%;">
    <div class="progress-bar" style="background-color: #00aaff; color: black; font-weight: 700; font-size: 17px;">25%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment five" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 24%;">
    <div class="progress-bar" style="background-color: #0062ff; color: black; font-weight: 700; font-size: 17px;">22%</div>
  </div>
</div>

<p style="font-size: 14px; text-align: justify; font-style: italic;">(Äußerst unzufrieden, Unzufrieden, Weder noch, Zufrieden, Äußerst zufrieden)</p>


<p style="text-align: justify;">Wie man erkennen kann, hat die Mehrheit schon einen guten Überblick über Ihre Medikamente, doch wir wollen die Verwaltung noch einfacher machen!
  Unsere App soll leicht bedienbar sein, sodass auch die restlichen Personen, die sich damit vielleicht schwer tun, sie verweden können. 
</p>

</div> <!-- ende hintergrund -->

<br><br>


<!-- 2. Auswertung -->
<div class="hintergrund">
<h4 style="font-weight: 700; letter-spacing: 0.5px;">"Wo besorgen Sie nicht rezeptpflichtige Medikamente (z.B. Aspirin, Hustensaft,...)?"</h4>

<div class="col-12 image-container" style="position: relative; text-align: center;">
  <img class="auswertung" id="clickableImage" src="assets/img/apotheke_auswertung.png" width="700" height="400" style="border-radius: 30px;" alt="meist genannte Medikamente">
  <p style="font-size: 14px; text-align: center; font-style: italic;">(Je größer der Begriff ist, desto häufiger wurde er genannt)</p>
</div>

<p style="text-align: center;">Man kann deutlich erkennen, dass die meisten Personen ihre Medikamente in der Apotheke besorgen. Aber auch die Website der Shop-Apotheke ist 
  bei vielen essenziell.
</p>

</div> <!-- ende hintergrund -->

<br><br>


<!-- 3. Auswertung -->
<div class="hintergrund">
<h4 style="font-weight: 700; letter-spacing: 0.5px;">"Wie oft nehmen Sie Medikamente ein?"</h4>

<div class="col-12 image-container" style="position: relative; text-align: center;">
  <img class="auswertung" id="clickableImage" src="assets/img/diagramm_auswertung.png" width="500" height="400" style="border-radius: 30px;" alt="Einnahmehäufigkeit der Medikamente">
</div>

<br>

<p style="text-align: center;">Sehr viele der Befragten nehmen nur bei Bedarf ihre Medikamente ein, wie zum Beispiel wenn man mal Kopfweh bekommen hat oder einem schwindelig ist.
  Circa ein Viertel müssen täglich Pharmazeutika einnehmen, wobei man da schon ziemlich durcheinanderkommen kann, wenn es mal mehr als 2 verschiedene Arzneimittel sind.
  Dieses Problem gibt es bei Apo-Supply nicht mehr!
</p>

</div> <!-- ende hintergrund -->

<br><br>



<!-- 4. Auswertung -->
<div class="hintergrund">
<h4 style="font-weight: 700; letter-spacing: 0.5px;">"Ich benutze eine digitale Verwaltung für meine Tabletten"</h4>

<div class="progress-stacked">
  <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
    <div class="progress-bar" style="background-color: #ff6600; color: black; font-weight: 700; font-size: 17px;">92%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 4%;">
    <div class="progress-bar" style="background-color: #ff8b3d; color: black; font-weight: 700; font-size: 17px;">2%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 8%;">
    <div class="progress-bar" style="background-color: #777777; color: black; font-weight: 700; font-size: 17px;">6%</div>
  </div>
</div>

<p style="font-size: 14px; text-align: justify; font-style: italic;">(Stimme überhaupt nicht zu, Stimme eher nicht zu, Weder noch)</p>


<p style="text-align: justify;">Die Mehrheit unserer Befragten stimmt überhaupt nicht zu, dass sie eine digitale Verwaltung benutzen. Das werden wir mit Apo-Supply ändern!
  Denn unsere App wird genau dazu beitragen - eine digitale Verwaltung aller ihrer Medikamente.
</p>

</div> <!-- ende hintergrund -->

<br><br>


<!-- 5. Auswertung -->
<div class="hintergrund">
<h4 style="font-weight: 700; letter-spacing: 0.5px;">"Eine Erinnerung für die Einnahme ist sinnvoll"</h4>

<div class="progress-stacked">
  <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
    <div class="progress-bar" style="background-color: #ff6600; color: black; font-weight: 700; font-size: 17px;">2%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%;">
    <div class="progress-bar" style="background-color: #ff8b3d; color: black; font-weight: 700; font-size: 17px;">6%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%;">
    <div class="progress-bar" style="background-color: #777777; color: black; font-weight: 700; font-size: 17px;">6%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
    <div class="progress-bar" style="background-color: #00aaff; color: black; font-weight: 700; font-size: 17px;">46%</div>
  </div>
  <div class="progress" role="progressbar" aria-label="Segment five" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    <div class="progress-bar" style="background-color: #0062ff; color: black; font-weight: 700; font-size: 17px;">40%</div>
  </div>
</div>

<p style="font-size: 14px; text-align: justify; font-style: italic;">(Äußerst unzufrieden, Unzufrieden, Weder noch, Zufrieden, Äußerst zufrieden)</p>


<p style="text-align: justify;">Wie man erkennen kann, finden die meisten eine Erinnerung für ihre Medikamenteneinnahme sehr sinnvoll - warum auch nicht? Es ist sehr vom Vorteil, erinnert zu werden,
  sobald man seine Arzneimittel einnehmen muss.
</p>

</div> <!-- ende hintergrund -->



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

.link{
  text-decoration: underline;
  color: #00aaff;
  
}


/* Bilder  */
.auswertung{
  box-shadow: 0 2px 4px rgba(0,0,0,0.6);
  max-width: 100%;
  height: auto;
}


/* "cards" */
.hintergrund{
  background-color: rgba(255,255,255,0.5);
  padding: 15px;
  box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.6), 1px 0 4px rgba(0, 0, 0, 0.6);
  transition: transform 1s ease, opacity 1s ease, scale 1s ease;

}

.hintergrund:hover{
  background-color: rgba(255,255,255,0.5);
  padding: 15px;
  box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.6), 1px 0 4px rgba(0, 0, 0, 0.6);
  transform: translateY(0) scale(1.02);
}



@media (max-width: 576px) {
    h1 {
        font-size: 36px;
      }
    h4 {
        font-size: 20px;
    }
    p {
        font-size: 17px;
    }
    .auswertung {
      width: 100%;
    }
}

/* Auf Tablets und kleinere Laptops (577px bis 992px) */
@media (min-width: 577px) and (max-width: 992px) {
    h1 {
        font-size: 36px; 
    }
    h4 {
        font-size: 20px;
    }
    p {
        font-size: 17px;
    }
    .auswertung {
      width: 70%;
    }
}

/* Auf größeren Bildschirmen (ab 993px) */
@media (min-width: 993px) {
    h1 {
        font-size: 45px; 
    }
    h4 {
        font-size: 22px;
    }
    p {
        font-size: 18px;
    }
    .auswertung {
      width: 45%;
    }
}


</style>

</html>