<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

// session_start();
require "functions/database.php";

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
    require "includes.php";
    require "templates/navbar.php";
    ?>
    <div class="container">

    <br>
    <h1>Unsere App</h1>
    <br> <br>

    


<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/img/logoapo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
<h4>Lizenzpakete</h4>
<br><br>


<div class="container">
  <div class="row">
    <!-- Card 1: Standard License -->
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Standard License</h5>
          <p class="card-text">Ideal for individuals or small teams. Includes core features and basic support.</p>
          <ul>
            <li>1 user</li>
            <li>Basic support</li>
            <li>Access to standard features</li>
          </ul>
          <p class="price">Price: $10/month</p>
          <a href="#" class="btn btn-primary">Select</a>
        </div>
      </div>
    </div>

    <!-- Card 2: Premium License -->
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Premium License</h5>
          <p class="card-text">Great for growing teams and advanced use. Includes premium features and priority support.</p>
          <ul>
            <li>Up to 5 users</li>
            <li>Priority support</li>
            <li>Access to premium features</li>
          </ul>
          <p class="price">Price: $30/month</p>
          <a href="#" class="btn btn-primary">Select</a>
        </div>
      </div>
    </div>

    <!-- Card 3: 3 Monate Gratis Angebot -->
    <div class="col-md-4">
      <div class="card border-success" style="width: 18rem; border: 2px solid green;">
        <div class="card-body">
          <h5 class="card-title text-success">Special License - 3 Monate Gratis!</h5>
          <p class="card-text">Genießen Sie 3 Monate kostenlose Nutzung mit allen Premium-Funktionen und unbegrenztem Zugang.</p>
          <ul>
            <li>Unbegrenzte Benutzer</li>
            <li>24/7 Premium-Support</li>
            <li>Voller Zugriff auf alle Funktionen</li>
          </ul>
          <p class="price text-success">Preis: $50/Monat nach den ersten 3 kostenlosen Monaten</p>
          <a href="#" class="btn btn-success">Select</a>
        </div>
      </div>
    </div>
  </div>
</div>
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
