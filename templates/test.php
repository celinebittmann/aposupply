<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apo-Supply</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">
    <link href="functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css">
    <style>
        body {
            background: linear-gradient(90deg, #e6f9ff, #d7f8fe, #6ae8fe, #e6f9ff, #d7f8fe);
            background-size: 200% 200%;
            animation: gradientMove 12s linear infinite;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .counter { font-size: 80px; font-weight: 650; }
        .umfrage p { font-size: 50px; font-weight: 550; }
        .infos_umfrage { font-size: 30px; font-weight: 800; }
        .umfrage_btn { border-radius: 30px; background-color: #00aaff; }
        .title { background-color: rgba(0,170,255,0.2); }
        .card { box-shadow: 0 4px 8px rgba(0,0,0,0.6); }
    </style>
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container text-center my-5">
        <h1 class="fw-bold">Willkommen bei Apo-Supply!</h1>
        <div class="row mt-5 align-items-center">
            <div class="col-lg-6 col-12">
                <p class="fst-italic">Wir freuen uns, Sie auf unserer Seite begrüßen zu dürfen.</p>
                <p>Ihre Gesundheit und Ihr Wohlbefinden stehen bei uns an erster Stelle...</p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="assets/img/startseite_frau.png" class="img-fluid rounded" alt="Frau mit Medikamenten">
            </div>
        </div>
    </div>

    <!-- Wellen -->
    <div class="wellen">
        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgba(0,170,255,0.3)" d="M0,160L48,158C96,156,192,152,288,160C384,168,480,190,576,190C672,190,768,160,864,160C960,160,1056,190,1152,195C1248,200,1344,180,1392,170L1440,160L1440,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Zähler -->
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-4 counter" data-target="1">0</div>
            <div class="col-4 counter" data-target="49">0</div>
            <div class="col-4 counter" data-target="6">0</div>
        </div>
        <div class="row umfrage mt-3">
            <div class="col-4"><p>Umfrage</p></div>
            <div class="col-4"><p>Befragte</p></div>
            <div class="col-4"><p>Altersgruppen</p></div>
        </div>
    </div>

    <!-- Umfrage Infos -->
    <div class="container text-center my-5">
        <h3 class="infos_umfrage">Weitere Infos zu unserer Umfrage finden Sie hier:</h3>
        <a href="templates/umfrage.php" class="btn umfrage_btn">Weitere Informationen</a>
    </div>

    <!-- Vorteile -->
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card p-3">
                    <h4 class="fw-bold">Mobilität</h4>
                    <p>Downloaden Sie unsere App...</p>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-3 mt-md-0">
                <div class="card p-3">
                    <h4 class="fw-bold">Erinnerungen</h4>
                    <p>Sie erhalten immer Benachrichtigungen...</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                let startValue = 0;
                const endValue = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const increment = endValue / (duration / 50);

                function updateCounter() {
                    startValue += increment;
                    counter.textContent = Math.floor(startValue);
                    if (startValue < endValue) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = endValue;
                    }
                }
                updateCounter();
            });
        });
    </script>
</body>
</html>
