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
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">

    <link href="functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css" >


  </head>
  <br><br><br>
  <body>
    <?php
    require "templates/navbar.php";

    ?>
    <div class="container">
    <br>
    <h1 style="font-weight: 700; letter-spacing: 0.5px;">Willkommen bei Apo-Supply!</h1>
    <br>

    <div class="row align-items-center">
    <!-- Textbereich -->
    <div class="col-lg-6 col-md-12 col-12 mb-4 mb-lg-0">
        <p class="fst-italic" style="letter-spacing: 1px; text-align: justify;">
            Wir freuen uns, Sie auf unserer Seite begrüßen zu dürfen.
        </p>
        <p style="text-align: justify;">
            Ihre Gesundheit und Ihr Wohlbefinden stehen bei uns an erster Stelle. Unsere Plattform stellt sicher, dass Sie stets Zugriff 
            auf aktuelle und verlässliche Informationen haben. Wir bieten detaillierte Produktbeschreibungen, Anwendungsinformationen und Hinweise zur sicheren Verwendung.
            Wir sind bestrebt, Ihnen eine benutzerfreundliche und informative Plattform zu bieten. Unser motiviertes Team arbeitet kontinuierlich daran, 
            Ihnen die bestmöglichen Informationen zur Verfügung zu stellen und Ihre Fragen kompetent zu beantworten.
        </p>
        <br>
        <p style="text-align: justify;">
            Dank der vielen ehrlichen Antworten aus unserer Umfrage konnten wir eine erfolgreiche Website und App gestalten, die den Personen bei der 
            Medikamentenverwaltung helfen soll. 
        </p>
    </div>
    <div class="col-1"></div>

    <!-- Bildbereich -->
    <div class="col-md-2 col-md-4 col-6 text-center">
        <img class="medi" src="assets/img/startseite_frau.png" class="img-fluid rounded" alt="Frau mit Medikamenten">
    </div>
</div>


</div> <!-- ende container -->

<!-- Wellen -->
<div class="wellen">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="rgba(0,170,255,0.3)" fill-opacity="1" d="M0,160L48,158C96,156,192,152,288,160C384,168,480,190,576,190C672,190,768,160,864,160C960,160,1056,190,1152,195C1248,200,1344,180,1392,170L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgba(0,170,255,0.3)" fill-opacity="1" d="M0,160L40,162.7C80,165,160,170,240,160C320,150,400,120,480,115C560,110,640,130,720,135C800,140,880,130,960,135C1040,140,1120,155,1200,160C1280,165,1360,165,1400,165L1440,165L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z" transform="scale(1, -1) translate(0, -320)"></path>
  </svg>

</div>

<div class="container1">
<br>


<!-- laufende nummer -->
<div class="container text-center my-6">
    <div class="d-flex justify-content-around counter-container">
        <!-- Counter 1 -->
        <div class="counter-box p-4 mx-2">
            <div class="counter" data-target="1">0</div>
            <p>Umfrage</p>
        </div>
        
        <!-- Counter 2 -->
        <div class="counter-box p-4 mx-2">
            <div class="counter" data-target="49">0</div>
            <p>Befragte</p>
        </div>

        <!-- Counter 3 -->
        <div class="counter-box p-4 mx-2">
            <div class="counter" data-target="6">0</div>
            <p>Altersgruppen</p>
        </div>
    </div>
</div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const totalAnimationTime = 3000; // Gesamtzeit der Animation in Millisekunden (30 Sekunden)

            function animateCounter(counter, startTime) {
                const target = +counter.getAttribute('data-target');
                const duration = totalAnimationTime;
                const startValue = 0;

                function updateCount(timestamp) {
                    const elapsedTime = timestamp - startTime;
                    const progress = Math.min(elapsedTime / duration, 1);
                    const count = startValue + (target - startValue) * progress;

                    counter.innerText = Math.floor(count);

                    if (progress < 1) {
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target;
                    }
                }

                requestAnimationFrame(updateCount);
            }

            function handleScroll() {
                counters.forEach(counter => {
                    const rect = counter.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0 && !counter.classList.contains('started')) {
                        counter.classList.add('started');
                        const startTime = performance.now();
                        animateCounter(counter, startTime);
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            // Überprüfen, ob der Counter bereits beim Laden der Seite im Viewport ist
            handleScroll();
        });
    </script>

<br><br>


<!-- weitere Details zur Umfrage -->
<div class="row" >
  <div class="col-12" style="text-align: center;">
    <h3 class="infos_umfrage">Weitere Infos zu unserer Umfrage finden Sie hier:</h3>
    <br><br>
    <a href="templates/umfrage.php" class="btn  umfrage_btn" tabindex="-1" role="button" aria-disabled="true">weitere Informationen</a>

  </div> 
 
</div>


<br><br>


<!-- Infobox -->
<div class="container py-5">
    <div class="info card mx-auto" style="max-width: 900px; background-color: #fff;">
      <div class="card-header" style="font-size: 40px; font-weight: 700; text-align: center;">
        Ihre Vorteile
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-6 mb-3">
            <button class="btn title w-100 d-flex flex-column justify-content-center align-items-center text-center" style="height: 100%;">
              <h4 class="ueberschrift_card">Mobilität</h4>
              <p class="text_card">Downloaden Sie unsere App auf Ihr Handy, um Ihren Medikamentenbestand immer und überall dabei zu haben.</p>
            </button>
          </div>

          <div class="col-12 col-md-6 mb-3">
            <button class="btn title w-100 d-flex flex-column justify-content-center align-items-center text-center" style="height: 100%;">
              <h4 class="ueberschrift_card">Erinnerungen</h4>
              <p class="text_card">Sie erhalten immer Benachrichtigungen, sobald Sie ein Medikament zu sich nehmen müssen.</p>
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6 mb-3">
            <button class="btn title w-100 d-flex flex-column justify-content-center align-items-center text-center" style="height: 100%;">
              <h4 class="ueberschrift_card">Nachhaltigkeit</h4>
              <p class="text_card">Da Sie mit unserer App Ihren Datenstand online haben, werden übermäßige Käufe vermieden.</p>
            </button>
          </div>

          <div class="col-12 col-md-6 mb-3">
            <button class="btn title w-100 d-flex flex-column justify-content-center align-items-center text-center" style="height: 100%;">
              <h4 class="ueberschrift_card">Zeitersparnis</h4>
              <p class="text_card">Sobald Sie ein Medikament beinahe aufgebraucht haben, bekommen Sie eine Benachrichtigung, um rechtzeitig wieder etwas nachzukaufen!</p>
            </button>
          </div>
        </div>
      </div> 
    </div>
</div>

 </div> <!-- ende container -->

<br><br><br>



    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>


  <?php
    include "templates/footer.php";
  ?>
  
  <style>

.counter-container {
    display: flex;
    justify-content: space-around; 
    flex-wrap: nowrap;  
    padding: 10px;
}

.counter-box {
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    min-width: 220px;  
    height: 200px;    
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: transform 0.3s ease;
}

.counter-box:hover {
    transform: scale(1.07);
}


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

 
/* laufende Nummern + Umfragedetails*/
.counters {
  display: flex;
  justify-content: space-around;

}

.counter {
  font-size: 80px;
  margin: 20px;
  text-align: center;
  font-weight: 650;
  }

.umfrage p{
  text-align: center;
  font-weight: 550;
}


.infos_umfrage{
  font-size: 30px;
  font-weight: 800;
}

.umfrage_btn{
  border-radius: 30px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.6);
  background-color: #00aaff;
  font-weight: 700;
  letter-spacing: 0.5px;
  transition: transform 1s ease, opacity 1s ease, scale 1s ease;
}

.umfrage_btn:hover{
  border-radius: 30px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.8);
  transform: scale(1.05);
  letter-spacing: 1px;
  transform: translateY(0) scale(1.07);
}



/* Vorteile card */
.ueberschrift_card{
  text-align: left;
  font-weight: 700;
  font-size: 25px;
}

.text_card{
  text-align: left;
  font-size: 18px;
}

.title{
  background-color: rgba(0,170,255,0.2);
  height: 110px; width: 620px;
}

.title:hover{
  background-color: rgba(0,170,255,0.3);

}

.info {
  box-shadow: 0 4px 8px rgba(0,0,0,0.6);
  transform: translateY(20%);
  transition: transform 1s ease-in;
  height: auto;
}


.card.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Wellen */
.wellen{
  margin-top: -120px;
  margin-bottom: -450px;
}


@media (max-width: 576px) {
    h1 {
        font-size: 35px;
      }
    
    p {
        font-size: 17px;
    }
    .umfrage p {
        font-size: 20px;
    }
    .counter-box {
        min-height: 150px;
    }

    .counter {
        font-size: 40px;
    }
    .counter-box {
        width: 100%;  
        min-width: auto;
    }
    .container1 {
    padding-top: 210px;  
    }
    .wellen{
      margin-top: 10px;
    }
    .infos_umfrage{
      padding-top: -30px;
    }
    .medi{
      width: 150%;
      justify: space-around;
    }
}

@media (min-width: 577px) and (max-width: 992px) {
    h1 {
        font-size: 36px; 
    }
    
    p {
        font-size: 18px;
    }
    .umfrage p {
        font-size: 30px;
    }
    .container1 {
      padding-top: 135px;  
    }
    .wellen{
      margin-top: 10px;
    }
    .medi{
      width: 180%;
      justify: space-around;
      margin-bottom: -60px;
    }
}

@media (min-width: 993px) {
    h1 {
        font-size: 45px; 
    }
    
    p {
        font-size: 18px;
    }
    .umfrage p {
        font-size: 50px;
    }
    .counter-box {
        flex: 1;
        margin: 0 10px; 
    }
    .infos_umfrage{
      padding-top: 120px;
    }
    .medi{
      width: 100%;
    }
}


</style>
  </html>