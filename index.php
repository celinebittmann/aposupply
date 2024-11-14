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
    <title>Apo-Supply</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="functions/mystyle.css"rel="stylesheet">
  </head>
  <body>
    <?php
    require(__DIR__ . '/includes.php');
    require "templates/navbar.php";
    ?>
    <div class="container">
    <br>
    <h1>Willkommen bei Apo-Supply!</h1>
    <br>


<div class="row">
  <div class="col-6">
    <p style="font-style: italic; letter-spacing: 1px; text-align: justify;">Wir freuen uns, Sie auf unserer Seite begrüßen zu dürfen.</p>
    <p style="text-align: justify;">Ihre Gesundheit und Ihr Wohlbefinden stehen bei uns an erster Stelle. Unsere Plattform stellt sicher, dass Sie stets Zugriff 
      auf aktuelle und verlässliche Informationen haben. Wir bieten detaillierte Produktbeschreibungen, Anwendungsinformationen und Hinweise zur sicheren Verwendung.
      Wir sind bestrebt, Ihnen eine benutzerfreundliche und informative Plattform zu bieten. Unser motiviertes Team arbeitet kontinuierlich daran, 
      Ihnen die bestmöglichen Informationen zur Verfügung zu stellen und Ihre Fragen kompetent zu beantworten.
    </p>
  </div>

  <div class="col-1">
  </div>

  <div class="col-4">
    <img src="assets/img/startseite_frau.png" width="400" height="400" alt="Frau mit Medikamenten">
  </div>


</div>




<br><br><br><br><br>






<!-- <div class="numbers">
            <div class="numbers-header">
                <p class="numbers-heading">globale Vernichtung - zuverlässige Vorhersagen
                jahrelange Datenerfassung</p>
            </div>
            <div class="number-container">
                <div class="Laender-container">
                    <span class="material-symbols-outlined size">language</span>
                    <span class="number-Laender num" data-val="193">0</span>
                    <p class="Laender-text">Länder</p>
                </div>
                <div class="vorhersage-container">
                    <span class="material-symbols-outlined size">update</span>
                    <span class="number-vorhersage num" data-val="7">0</span>
                    <p class="vorhersage-text">Tage Vorhersage</p>
                </div>
                <div class="historie-container">
                    <span class="material-symbols-outlined size">calendar_month</span>
                    <span class="number-historie num" data-val="17">0</span>
                    <p class="historie-text">Jahre historische Daten</p>
                </div>
            </div>
           </div>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js" integrity="sha512-v3fZyWIk7kh9yGNQZf1SnSjIxjAKsYbg6UQ+B+QxAZqJQLrN3jMjrdNwcxV6tis6S0s1xyVDZrDz9UoRLfRpWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            
 -->



 <!-- 
<div class="tabs">
	<details name="tab" >
		<summary> Registerkarten</summary>
		<div class="content">
		</div>
	</details>
	<details name="tab">
		<summary> Standardverhalten</summary>
		<div class="content">
		</div>
	</details>
	<details name="tab" open>
		<summary> Barrierefreiheit </summary>
		<div class="content">
		</div>
	</details>
</div> -->





</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>



  <?php
    include "templates/footer.php";
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



.tabs details {
	display: inline-block;
}

.tabs summary {
	background-color: lightgrey;
	border: thin solid black;
	border-bottom: none;
	border-radius: 0.5em 0.5em 0 0;
	font-weight: bold;
	height: 1.5em;
	width: 10em;
	padding: 0.5em 0.5em 10px;
}

.tabs .content {
	position: absolute;
	left: 0;
	right: 0;
	background: white;
	border: thin solid #ccc;
	padding: .5em;
}









/* .numbers {
  display: grid;
  justify-items: center;
  margin: 2rem auto;
}

.numbers-header {
  margin-bottom: 2rem;
  text-align: center;
  width: 75%;
}

.numbers-heading {
  font-size: 3rem;
  font-weight: bold;
}

.number-container {
  display: flex;
  justify-content: center;
  gap: 4rem; /* Abstand zwischen den Elementen 
}

.Laender-container, .vorhersage-container, .historie-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-family: 'Arial', sans-serif;
  width: 12vw;
}



.size{
  font-size: 150px !important;
  margin-bottom: 0.5rem;
}


.number-Laender, .number-vorhersage, .number-historie {
  font-size: 4rem;
  font-weight: 700;
  margin: 0;
  color: orange; /* Orange Farbe fÃ¼r Zahlen 
}

.Laender-text, .vorhersage-text, .historie-text {
  font-size: 1.9rem;
  margin: 0;
  text-align: center;
}

@media (max-width: 768px) {
  .number-container {
    flex-direction: column;
    gap: 2rem;
  }
} 
*/



























</style>
  </html>