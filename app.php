<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

// session_start();
// require "functions/database.php";

$sql = "SELECT * FROM produkte";
$andi = $dbh->query($sql);

?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unsere App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css" >
  </head>
  <br><br><br>
  <body>
    <?php

    require "templates/navbar.php";
    ?>
    <div class="container">

    <br>
    <h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Unsere App</h1>
    <br>



    <!-- Anfnag Box -->
<div class="card" style="background-color: #f5f5f5;">
  <div class="card-header" style="font-size: 40px; font-weight: 700; text-align: center;">
    Unser Service
    <p style="text-align: center; font-size: 16px; color: #555;">
      Diese Dienste können Sie nach Anmeldung auf unserer App nutzen!
    </p>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-6 text-center">
        <div class="icon-circle mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
          </svg>
        </div>
        <button class="btn title">
          <h4 class="ueberschrift_card">Lagerbestand</h4>
          <p class="text_card">In unserer App können Sie sich jederzeit den aktuellen Bestand Ihrer Medikamente ansehen.</p>
        </button>
      </div>
      <div class="col-6 text-center">
        <div class="icon-circle mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
            <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
          </svg>
        </div>
        <button class="btn title">
          <h4 class="ueberschrift_card">Erinnerungen</h4>
          <p class="text_card">Sie erhalten immer Benachrichtigungen, sobald Sie ein Medikament zu sich nehmen müssen.</p>
        </button>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6 text-center">
        <div class="icon-circle mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
          </svg>          
        </div>
        <button class="btn title">
          <h4 class="ueberschrift_card">Empfehlungen</h4>
          <p class="text_card">Falls Sie unsicher sind, welches Medikament das beste Preis-Leistungs-Verhältnis hat – Empfehlungen in unserer App helfen.</p>
        </button>
      </div>
      <div class="col-6 text-center">
        <div class="icon-circle mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
            <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
          </svg>
        </div>
        <button class="btn title">
          <h4 class="ueberschrift_card">Nachbestellen</h4>
          <p class="text_card">Sobald Sie ein Medikament beinahe aufgebraucht haben, bekommen Sie eine Benachrichtigung, um rechzeitig etwas nachkaufen zu können.</p>
        </button>
      </div>
    </div>
    <br>
    <div class="card-header" style="font-size: 16px; font-weight: 700; color: #555; display: flex; justify-content: center; align-items: center; height: 100px;">
  <p style="margin: 0;"> 
    <a href="test.php" style="text-decoration: none; color: inherit;">
      Hier geht es zu unserer App 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
      </svg>
    </a>
  </p>
</div>
</div>
</div> <!-- Ende Box -->



<style>
.icon-circle {
  display: inline-block;
  /*Icon*/ padding: 20px;
  background-color: rgba(0,170,255,0.2);
  border-radius: 50%; 
  /* Größe Kreis: */
  width: 70px; 
  height: 70px;
}

.card-header {
  background-color: #f5f5f5;
}

.btn {
  background: none;
  border: none;
}


.ueberschrift_card{
  text-align: left;
  font-weight: 700;
  font-size: 25px;
}

.text_card{
  text-align: left;
  font-size: 18px;
}



.card {
  box-shadow: 0 4px 8px rgba(0,0,0,0.6);
  transform: translateY(10%);
  transition: transform 1s ease-in;
}

.card.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
<script>

// card einfliegen lassen

  document.addEventListener('DOMContentLoaded', function() {
    const card = document.querySelector('.card');

    function checkVisibility() {
        const cardPosition = card.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (cardPosition < windowHeight && cardPosition > 0) {
            card.classList.add('visible');
        } 
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility); // Überprüfung bei Änderung der Fenstergröße

    // Initialer Check, falls die Karte von Anfang an im Sichtbereich ist
    checkVisibility();
});
</script>


<br><br><br><br>

<div class="container">
<h3>Lizenzpakete</h3>
<h5>Um Ihr Paket zu aktivieren, bekommen Sie nach der Registrierung einen Code an ihre E-Mail zugeschickt, welcher einmalig gilt.</h5>
<h6 style="font-style: italic;">Aktivierung muss auf der App erfolgen, diese Website dient nur zum Informationsaustausch!</h6>
<br>
<div class="row">
  <!-- Card 1: Staneard -->
  <div class="col-md-4">
    <div class="card" style="width: 18rem; height: 30rem; cursor: pointer; position: relative;">
      <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <h5 class="card-title">Einzel-User</h5>
          <br>
          <p class="card-text">Dieses Abonnement ist ideal für Einzelnutzer und zum Kennenlernen der App "Apo-Supply".</p>
          <ul>
            <li>1 Benutzer</li>
            <li>Standard</li>
            <li>keine zusätzlichen Kosten</li>
            <li>bis zu 20 Medikamente verwalten</li>
          </ul>
          <p>Preis: € 0,00</p>
        </div>
        <a href="#" class="btn btn-info btn-rounded">Registrieren auf unserer App</a>
      </div>
    </div>
  </div>

  <!-- Card 2: Familienpackage -->
  <div class="col-md-4">
    <div class="card" style="width: 18rem; height: 30rem; cursor: pointer; position: relative;">
      <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <h5 class="card-title">Family Package</h5>
          <br>
          <p class="card-text">Dieses Abonnement ist ideal für Haushalte mit mehreren Personen, um Ihre Medikamente zu verwalten.</p>
          <ul>
            <li>bis zu 5 Benutzers</li>
            <li>bester Support</li>
            <li>Medikament-Empfehlungen</li>
            <li>bis zu 50 Medikamente verwalten</li>
          </ul>
          <p>Preis: €14,99/Monat</p>
        </div>
        <a href="#" class="btn btn-info btn-rounded">Registrieren auf unserer App</a>
      </div>
    </div>
  </div>

  <!-- Card 3: 3 Monate Gratis Angebot -->
  <div class="col-md-4">
    <div class="card border-info" style="width: 18rem; height: 30rem; cursor: pointer; position: relative;">
    <span class="position-absolute badge rounded-pill bg-success schief-badge">
      kurzfristiges Angebot
    </span>
      <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <h5 class="card-title text-info">Premium Package</h5>
          <h5 class="card-title text-info">3 Monate Gratis!</h5>
          <p class="card-text">3 Monate kostenlose Nutzung mit allen Premium-Funktionen und unbegrenztem Zugang.</p>
          <ul>
            <li>Unbegrenzte Benutzer</li>
            <li>24/7 Premium-Support</li>
            <li>Voller Zugriff auf alle Funktionen</li>
            <li>unendlich viele Medikamente verwalten</li>
          </ul>
          <p>Preis: €29,99/Monat nach den ersten 3 kostenlosen Monaten</p>
        </div>
        <a href="#" class="btn btn-info btn-rounded">Registrieren auf unserer App</a>
      </div>
    </div>
  </div>
</div>
</div>


<br><br>

  <style>
    /*Cards*/
     /* Karten-Animation */
    .card {
      transition: transform 0.5s ease, opacity 0.5s ease;
      opacity: 0;
      transform: translateY(50px);
    }

    /* Pfeil-Animation */
    .bi-caret-right-fill {
      transition: transform 0.5s ease;
      opacity: 0;
      transform: translateX(-30px);
    }

    /* Sichtbar, sobald sie geladen werden */
    .card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .bi-caret-right-fill.visible {
      opacity: 1;
      transform: translateX(0);
    }

    /* Füge beim Hover einen Zoom-Effekt hinzu */
    .card:hover {
      transform: scale(1.05);
    }

    /* Pfeil-Animation beim Hover */
    .bi-caret-right-fill:hover {
      transform: translateX(10px);
    }

/*Lizenzpakete*/
    /* Runde Ecken für Buttons */
.btn-rounded {
  border-radius: 20px;
}

/*Badge schief */
.schief-badge {
  transform: rotate(15deg); /* schräg */
  right: -30px; /* Verschiebt*/
  z-index: 1; /* immer sichtbar, nicht verdeckt wird*/
}

  </style>


  <script>
    // Warte, bis vollständig geladen ist
    document.addEventListener("DOMContentLoaded", function() {
      //Klasse 'visible' hinzufügen, um Animation zu starten
      const cards = document.querySelectorAll('.card');
      const arrows = document.querySelectorAll('.bi-caret-right-fill');

      cards.forEach((card, index) => {
        setTimeout(() => {
          card.classList.add('visible');
        }, index * 300); // Verzögerung zwischen  Karten
      });

      arrows.forEach((arrow, index) => {
        setTimeout(() => {
          arrow.classList.add('visible');
        }, (index + 1) * 300); // Verzögerung für Pfeile
      });
    });
  </script>



<br><br><br>

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
</style>

</html>
