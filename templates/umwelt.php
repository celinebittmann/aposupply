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
    <title>Nachhaltigkeit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css?v=1.0" rel="stylesheet" type="text/css" >
    <base href="/aposupply/">

  </head>
  <br><br><br>
<body>
    <?php
     require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>

    <br>
    <div class="container">
    <div class="container d-flex align-items-center">
    <div class="flex-grow-1" style="margin-right: 20px;">
    <h1>Nachhaltigkeit</h1>
    <br>
    <p style="font-style: italic; letter-spacing: 1px; text-align: justify;">
      "Nachhaltigkeit bedeutet, die Bedürfnisse der Gegenwart so zu befriedigen, dass die Möglichkeiten zukünftiger Generationen nicht eingeschränkt werden."
    </p>
    <p style="text-align: justify;">
      Antibiotika können Algen und Cyanobakterien schädigen, wodurch das Nahrungsnetz und Ökosysteme aus dem Gleichgewicht geraten. Medikamente im Grundwasser erschweren 
      zudem die Trinkwassergewinnung. Obwohl die gemessenen Konzentrationen unter therapeutisch wirksamen Dosen liegen, sind Wasserlebewesen ständig einer Mischung dieser Stoffe ausgesetzt. Die Aufnahme erfolgt über Haut, Nahrung und Schleimhäute, wodurch Wirkstoffe 
      in den Organen gespeichert werden. Dies kann Organschäden, Verhaltensänderungen oder Fortpflanzungsstörungen verursachen, mit erheblichen Folgen für das Ökosystem.
    </p>
    <p style="text-align: justify;">
      Um diese Ökosysteme nun zu schützen, hilft die Einsicht auf den Vorrat, Überkäufe zu vermeiden und unnötige Verschwendung zu reduzieren. Diese Funktionen tragen nicht nur zur Bequemlichkeit bei, sondern auch zur effektiven Nutzung von Ressourcen und zum Umweltschutz durch die Minimierung von Medikamentenabfall.
    </p>
  </div>
  <div class="image-container" style="position: relative;">
    <img id="clickableImage" src="assets/img/umwelt.png" alt="Umweltbild" style="width: 300px; height: auto; border-radius: 10px; cursor: pointer;">
  </div>
</div>


  <br><br>
    <div class="container">
  <div class="row align-items-center">
    <div class="col-md-3">
      <div class="card" id="clickableCard" style="width: 21rem; height: 33rem; cursor: pointer;">
        <img src="assets/img/aposchrank1.jpg" class="card-img-top" alt="Bild überfüllter Apothekenschrank">
        <div class="card-body">
          <h5>Ohne Apo-Supply</h5>
          <p class="card-text">
            Viele Haushalte verfügen über einen sogenannten „Apothekenschrank“. Häufig ist dieser jedoch überfüllt, 
            da Medikamente doppelt vorhanden sind oder nach Ablauf ihres Verfalldatums schlichtweg vergessen werden und weiterhin darin verbleiben.</p>
        </div>
      </div>
    </div>

    <!-- Pfeil zwischen den Karten -->
    <div class="col-auto"><!--sorgt dafür, dass Pfeile nur so viel Platz wie nötig einnehmen & nicht zu viel leerer Raum entsteht-->
      <svg xmlns="http://www.w3.org/2000/svg" width="90" height="32" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
      </svg>
    </div>

    <div class="col-md-3">
      <div class="card" id="clickableCard2" style="width: 21rem; height: 33rem; cursor: pointer;">
        <img src="assets/img/logoapo.png" class="card-img-top" alt="Logo Apo-Supply">
        <div class="card-body">
        <h5>Unsere App</h5>
          <p class="card-text">
     Die App „Apo-Supply“ kann ganz einfach und kostenfrei in Ihrem App Store bzw. Play Store installiert werden.
     Für weitere Details besuchen Sie die <a href="app.php" style="color: darkblue; font-weight: bold;">
     Infoseite der App</a> oder laden Sie sie direkt <a href="test.php" style="color: darkblue; font-weight: bold;">hier</a> herunter.
      </p>

        </div>
      </div>
    </div>

    <!-- Pfeil zwischen den Karten -->
    <div class="col-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="90" height="32" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
      </svg>
    </div>

    <div class="col-md-3">
      <div class="card" id="clickableCard3" style="width: 21rem; height: 33rem; cursor: pointer;">
      <img src="assets/img/bild_app.png" class="card-img-top" alt="Screenshot App">
        <div class="card-body">
        <h5>Mit Apo-Supply</h5>
          <p class="card-text">
            Unsere App bietet Ihnen einen umfassenden Überblick über Ihre Medikamente und benachrichtigt Sie automatisch, wenn der Vorrat zur Neige geht 
          und hilft Ihnen beim Nachbestellen</p>
        </div>
      </div>
     
    </div>

    


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
  
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
<br><br><br><br>
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
</style>



   <!-- Herzen bei Bild -->
<style>
  .heart {
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: red;
    transform: rotate(-45deg);
    animation: floatUp 2s ease-out forwards;
  }

  .heart::before,
  .heart::after {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: red;
    border-radius: 50%;
  }

  .heart::before {
    top: -10px;
    left: 0;
  }

  .heart::after {
    top: 0;
    left: -10px;
  }

  @keyframes floatUp {
    0% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-150px) scale(1.5);
      opacity: 0;
    }
  }
</style>

<script>
  document.getElementById('clickableImage').addEventListener('click', function (event) {
    const heart = document.createElement('div');
    heart.classList.add('heart');
    document.querySelector('.image-container').appendChild(heart);

    // Positioniere das Herz am Klickpunkt
    heart.style.left = `${event.offsetX}px`;
    heart.style.top = `${event.offsetY}px`;

    // Entferne  Herz nach  Animation
    setTimeout(() => {
      heart.remove();
    }, 2000);
  });
</script>


<!-- traurigen Smileys -->
<style>
  .sad-smiley {
    position: absolute;
    width: 20px;
    height: 20px;
    font-size: 20px;
    animation: floatUp 2s ease-out forwards;
  }

  @keyframes floatUp {
    0% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-150px) scale(1.5);
      opacity: 0;
    }
  }
</style>

<script>
  document.getElementById('clickableCard').addEventListener('click', function (event) {
    const smiley = document.createElement('div');
    smiley.classList.add('sad-smiley');
    smiley.textContent = '😢☹️';
    document.body.appendChild(smiley);

    // Positioniere den Smiley am Klickpunkt relativ zum Viewport
    smiley.style.left = `${event.pageX}px`;
    smiley.style.top = `${event.pageY}px`;

    // Entfernt Smiley nach  Animation
    setTimeout(() => {
      smiley.remove();
    }, 2000);
  });
</script>

<style>
  .sad-smiley {
    position: absolute;
    width: 20px;
    height: 20px;
    font-size: 20px;
    animation: floatUp 2s ease-out forwards;
  }

  @keyframes floatUp {
    0% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-150px) scale(1.5);
      opacity: 0;
    }
  }
</style>

<script>
  document.getElementById('clickableCard').addEventListener('click', function (event) {
    const smiley = document.createElement('div');
    smiley.classList.add('sad-smiley');
    smiley.textContent = '😧😢☹️';
    document.body.appendChild(smiley);

    // Positioniere den Smiley am Klickpunkt relativ zum Viewport
    smiley.style.left = `${event.pageX}px`;
    smiley.style.top = `${event.pageY}px`;

    // Entfernt Smiley nach  Animation
    setTimeout(() => {
      smiley.remove();
    }, 2000);
  });
</script>

<!-- Daumen nach oben, verschiedene Farben -->
<style>
  .daumen {
    position: absolute;
    width: 20px;
    height: 20px;
    font-size: 20px;
    animation: floatUp 2s ease-out forwards;
  }

  @keyframes floatUp {
    0% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-150px) scale(1.5);
      opacity: 0;
    }
  }
</style>

<script>
  document.getElementById('clickableCard2').addEventListener('click', function (event) {
    const daumen = document.createElement('div');
    daumen.classList.add('daumen');
    daumen.textContent = '👍🏼👍🏽👍🏿';
    document.body.appendChild(daumen);

    // Positioniere den Daumen am Klickpunkt relativ zum Viewport
    daumen.style.left = `${event.pageX}px`;
    daumen.style.top = `${event.pageY}px`;

    // Entfernt Daumen nach  Animation
    setTimeout(() => {
      daumen.remove();
    }, 2000);
  });
</script>

<!-- glückliches Gesicht -->
<style>
  .happy {
    position: absolute;
    width: 20px;
    height: 20px;
    font-size: 20px;
    animation: floatUp 2s ease-out forwards;
  }

  @keyframes floatUp {
    0% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-150px) scale(1.5);
      opacity: 0;
    }
  }
</style>
<script>
  document.getElementById('clickableCard3').addEventListener('click', function (event) {
    const happy = document.createElement('div');
    happy.classList.add('happy');
    happy.textContent = '😀😍😊';
    document.body.appendChild(happy);

    // Positioniere den Daumen am Klickpunkt relativ zum Viewport
    happy.style.left = `${event.pageX}px`;
    happy.style.top = `${event.pageY}px`;

    // Entfernt Daumen nach  Animation
    setTimeout(() => {
      happy.remove();
    }, 2000);
  });
  </script>


<script src="../index.js"></script>

  </html>