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
    <title>Kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">
    <link href="../functions/mystyle.css" rel="stylesheet">
    <base href="/aposupply/">
  </head>
  
  <body>
    <?php require "navbar.php"; ?>
    
    <br><br>
    <div class="container mt-5">
      <h1 class="fw-bold" style="font-size: 45px; letter-spacing: 0.5px;">Kontaktiere uns!</h1>
      
      <div class="row my-4">
        <!-- Adresse -->
        <div class="col-sm-6 mb-3">
          <div class="card">
            <div class="card-body text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
              </svg>
              <h5 class="card-title mt-3">Adresse</h5>
              <p class="card-text">2130 Mistelbach, Edmund-Freibauer-Promenade 1</p>
            </div>
          </div>
        </div>

        <!-- Telefonnummer -->
        <div class="col-sm-3 mb-3">
          <div class="card">
            <div class="card-body text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
              </svg>
              <h5 class="card-title mt-3">Telefon</h5>
              <p class="card-text">02572/2305-350</p>
            </div>
          </div>
        </div>

        <!-- Email -->
        <div class="col-sm-3 mb-3">
          <div class="card">
            <div class="card-body text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
              <h5 class="card-title mt-3">E-Mail</h5>
              <h6 class="card-text">service@aposupply.digbizmistelbach.info</h6>
            </div>
          </div>
        </div>
      </div> <!-- row for contact details -->

      <!-- Google Maps and Contact Form -->
      <div class="row">
        <div class="col-sm-6 mb-3">
          <div class="card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2640.080498525776!2d16.567565!3d48.570007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d23601a955245%3A0xeca4453950a6cafb!2sBundeshandelsakademie%20und%20Bundeshandelsschule!5e0!3m2!1sde!2sat!4v1730705553427!5m2!1sde!2sat" width="100%" height="510" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-sm-6 mb-3">
          <div class="card">
            <div class="card-body">
              <form action="templates/nachricht_senden.php" method="post">
                <div class="mb-3">
                  <label for="nn" class="form-label">Vor- und Nachname</label>
                  <input type="text" name="name" class="form-control" id="nn" placeholder="Max Mustermann" required>
                </div>

                <div class="mb-3">
                  <label for="mail" class="form-label">E-Mail</label>
                  <input type="email" name="email" class="form-control" id="mail" placeholder="name@example.com" required>
                </div>

                <div class="mb-3">
                  <label for="betreff" class="form-label">Betreff</label>
                  <input type="text" name="betreff" class="form-control" id="betreff" placeholder="Betreff" required>
                </div>

                <div class="mb-3">
                  <label for="message" class="form-label">Nachricht</label>
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Ihre Nachricht" required></textarea>
                </div>

                <button type="submit" name="mail-button" class="btn btn-primary">Nachricht senden</button>
              </form>
            </div>
          </div>
        </div>
      </div> <!-- row for map and form -->
      
    </div> <!-- container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <?php include "footer.php"; ?>

  <style>
    body {
      background: linear-gradient(90deg, #e6f9ff, #d7f8fe, #6ae8fe, #e6f9ff, #d7f8fe);
      background-size: 200% 200%;
      animation: gradientMove 12s linear infinite;
    }

    .container {
    margin-bottom: 100px; 
}

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .card {
      box-shadow: 0 0 15px rgba(0,0,0,.2);
      border-radius: 15px;
    }

    @media (max-width: 576px) {
    h1 {
        font-size: 28px; /* Kleinere Schriftgröße für kleinere Bildschirme */
    }
    h5 {
        font-size: 20px;
    }
    p {
        font-size: 17px;
    }
}

/* Auf Tablets und kleinere Laptops (577px bis 992px) */
@media (min-width: 577px) and (max-width: 992px) {
    h1 {
        font-size: 36px; /* Mittelgroße Schriftgröße für mittelgroße Bildschirme */
    }
    h5 {
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
    h5 {
        font-size: 20px;
    }
    p {
        font-size: 14.5px;
    }
}
  </style>

</html>
