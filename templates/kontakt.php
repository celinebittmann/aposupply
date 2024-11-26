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
    <link rel="icon" href="logo_richtig.png" type="image/x-icon">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
</head>
<br><br><br>
  <body>
    <?php
    //  require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    <br>
    <h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Kontaktiere uns!</h1>
    <br>
    
  
  <div class="row">
    <!-- Adresse Schule -->
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card"> 
        <div class="card-body text-center mb-3 ">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="size-6 bi-caret-up-fill">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg>
 <!-- Icon von Heroicon !! -->

            <br><br>
          <h5 class="card-title">Adresse</h5>
          <p class="card-text ">2130 Mistelbach, Edmund-Freibauer-Promenade 1</p>
        </div>
      </div>
    </div>

 <!-- Telefonnummer richtig -->
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="size-6 bi-caret-up-fill">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
        </svg>

          <br><br>
        <h5 class="card-title">Telefon</h5>
        <p class="card-text ">02572/2305-350</p>
        
      </div>
    </div>
  </div>
     
  <!-- Email richtig-->
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="size-6 bi-caret-up-fill">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>

          <br><br>
        <h5 class="card-title">E-Mail</h5>
        <p class="card-text">service@aposupply.digbizmistelbach.info</p>
      </div>
    </div>
  </div>
</div> <!-- ende row -->

<br>

<!-- Google Maps -->
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card"> 
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2640.080498525776!2d16.567565!3d48.570007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d23601a955245%3A0xeca4453950a6cafb!2sBundeshandelsakademie%20und%20Bundeshandelsschule!5e0!3m2!1sde!2sat!4v1730705553427!5m2!1sde!2sat" width="636" height="538" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>  
  </div>  <!-- ende col -->

    <!-- Kontakt card -->
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card"> 
        <div class="card-body text-center mb-3">
          <br>

      <!-- Formular -->
  <form  action="templates/nachricht_senden.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>

        </span>
        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="nn" placeholder="0" required>
          <label for="nn">Vor- und Nachname</label>
      </div>
      </div>
      <br>

      <!-- Email -->
      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg>

        </span>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="mail" placeholder="name@test.com" required>
          <label for="mail">E-Mail</label>
      </div>
      </div>
      <br>

      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
          </svg>
        </span>
        <div class="form-floating">
          <input type="text" name="betreff" class="form-control" id="betreff" placeholder="0" required>
          <label for="betreff">Betreff</label>
      </div>
      </div>
      <br>

      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
          </svg>
        </span>
        <div class="form-floating">
          <textarea class="form-control" name="message" placeholder="Schreibe eine Nachricht!" id="message" style="height: 120px"></textarea>
          <label for="message">Nachricht</label>
      </div>
      </div>
    
        <button class="btn btn-primary d-grid gap-2 col-6 mx-auto senden" type="submit" name="mail-button" width="200">Nachricht senden</button>
  </form> 



      



    </div> <!-- ende card -->
  </div> <!-- ende col -->
  <br><br><br><br>
</div> <!-- ende row -->

</div>

<!-- Css -->
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

.card{
  border: #ffffff; 
  box-shadow: 2px 4px 2px rgba(0, 0, 0, 0.3), 2px 0 2px rgba(0, 0, 0, 0.2);
  transition: transform 1s ease, opacity 1s ease, scale 1s ease;
}

.card:hover{
  border: #ffffff; 
  box-shadow: 2px 4px 2px rgba(0, 0, 0, 0.3), 2px 0 2px rgba(0, 0, 0, 0.2);
  transform: translateY(0) scale(1.01);
}

.card-text{
  font-size: 15px;
  font-weight: 400;
}

.card-title{
  font-size: 20px;
  font-weight: 600;
}

.bi-caret-up-fill:hover {
    transform: translateY(-5px);
}

.senden{
  background-color: #00AAFF;
  border: none;
  border-radius: 1px;
}



</style>




<!-- Icon für senden Button?? -->


</html>

