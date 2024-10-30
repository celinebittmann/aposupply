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
    <title>Kontakt
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
</head>
  <body>
    <?php
     require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1>Kontaktiere uns!</h1>
    <br><br><br>
  
<div class="container">
  <div class="row">
    <div class="card w-50 mb-3">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
        </svg>
          <br><br>
        <h5 class="card-title">Adresse</h5>
        <p class="card-text ">2130 Mistelbach, Edmund-Freibauer-Promenade 1</p>
        <a href="https://www.google.at/maps/place/Edmund+Freibauer-Promenade+1,+2130+Mistelbach/@48.5711588,16.5645224,17z/data=!3m1!4b1!4m6!3m5!1s0x476d249fe3477e8d:0xec82cd406283da95!8m2!3d48.5711553!4d16.5670973!16s%2Fg%2F11y28xld1z?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00AAFF" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
            <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707"/>
          </svg>
        </a>
      </div>
    </div>
    <div class="card w-25 mb-3">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg>
          <br><br>
        <h5 class="card-title">Telefon</h5>
        <p class="card-text ">06508749235</p>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00AAFF" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
            <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707"/>
          </svg>
        </a>
      </div>
    </div>
    <div class="card w-25 mb-3">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
        </svg>
          <br><br>
        <h5 class="card-title">E-Mail</h5>
        <p class="card-text ">anja.bruestl@s.hakmistelbach.ac.at</p>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00AAFF" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
            <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707"/>
          </svg>
        </a>
      </div>
    </div>
  </div> <!-- ende row -->
<div class="row">
  <div class="card w-50 mb-2">
    <div class="card-body text-center mb-3">
      <br><br>
      <h5 class="card-title">Google Maps </h5>
      <p class="card-text ">Maps</p>
    </div>
  </div>  
  <div class="card w-50 mb-3">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
        </svg>
          <br><br>
        <h5 class="card-title">Kontakt</h5>
        <p class="card-text ">email</p>
        <p class="card-text ">betreff</p>
        <p class="card-text ">text</p>
        
      </div>
    </div>
</div> <!-- ende container -->




























    

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
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