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
    <title>AGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">
    <link href="../functions/mystyle.css" rel="stylesheet">
    <base href="/aposupply/">
</head>
<body>
    <?php
    //  require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1 class="display-4" style="font-weight: 700; letter-spacing: 0.5px;">Allgemeine Geschäftsbedingungen</h1>
    <br>

    <h2 class="DAschrift">Diplomarbeit: Apo-Supply</h2>
    <h5>Letzte Aktualisierung:</h5>
    <p class="design">xx.xx.2025</p>
    <br>

    <h3>Geltungsbereich:</h3>
      <p style="text-align: justify;">Diese Allgemeinen Geschäftsbedingungen gelten für alle Dienstleistungen, die angeboten werden.</p>
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

      <br><br>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    padding-top: 80px; /* Abstand für Navbar */
}

.container {
    margin-top: 30px; /* Sicherstellen, dass der Container nicht von der Navbar überlappt wird */
}

h1 {
    font-weight: 700;
    letter-spacing: 0.5px;
    font-size: 45px;
}

h2.DAschrift {
    font-style: italic;
    letter-spacing: 1px;
    font-weight: 700;
}

h3 {
    font-weight: 550;
    font-style: italic;
}

.design:hover {
    text-decoration: underline;
}

.link {
    text-decoration: none;
    color: #00aaff;
}

.link:hover {
    text-decoration: underline;
    letter-spacing: 1px;
    font-weight: 600;
    color: #000000;
}

@keyframes example {
    0% {letter-spacing:1px;}
    25% {letter-spacing:1.3px;}
    50% {letter-spacing:1.6px;}
    75% {letter-spacing:2px;}
    100% {letter-spacing:2.1px;}
}

.DAschrift {
    font-style: italic;
    letter-spacing: 1px;
    font-weight: 700;
}

.DAschrift:hover {
    position: relative;
    animation-name: example;
    animation-duration: 1s;
    animation-iteration-count: 1;
    letter-spacing: 2.1px;
}

/* Responsives Design */

/* Auf Smartphones (bis 576px) */
@media (max-width: 576px) {
    h1 {
        font-size: 20px; /* Kleinere Schriftgröße für kleinere Bildschirme */
    }
    h2.DAschrift {
        font-size: 22px;
    }
    h3 {
        font-size: 18px;
    }
    p {
        font-size: 14px;
    }
}

/* Auf Tablets und kleinere Laptops (577px bis 992px) */
@media (min-width: 577px) and (max-width: 992px) {
    h1 {
        font-size: 36px; /* Mittelgroße Schriftgröße für mittelgroße Bildschirme */
    }
    h2.DAschrift {
        font-size: 26px;
    }
    h3 {
        font-size: 20px;
    }
    p {
        font-size: 16px;
    }
}

/* Auf größeren Bildschirmen (ab 993px) */
@media (min-width: 993px) {
    h1 {
        font-size: 45px; /* Größere Schriftgröße für große Bildschirme */
    }
    h2.DAschrift {
        font-size: 28px;
    }
    h3 {
        font-size: 22px;
    }
    p {
        font-size: 18px;
    }
}

    </style>
</body>
</html>
