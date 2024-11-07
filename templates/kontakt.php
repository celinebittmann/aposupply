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
  
  <div class="row">
    <!-- Adresse Schule -->
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card"> 
        <div class="card-body text-center mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
            <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
          </svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg>
          <br><br>
        <h5 class="card-title">Telefon</h5>
        <p class="card-text ">+43 2572/2305-350</p>
        
      </div>
    </div>
  </div>
     
  <!-- Email richtig-->
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2640.080498525776!2d16.567565!3d48.570007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d23601a955245%3A0xeca4453950a6cafb!2sBundeshandelsakademie%20und%20Bundeshandelsschule!5e0!3m2!1sde!2sat!4v1730705553427!5m2!1sde!2sat" width="636" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>  
  </div>  <!-- ende col -->

    <!-- Kontakt card -->
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card"> 
        <div class="card-body text-center mb-3">
          <br>

      <!-- Formular -->
      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg>
        </span>
        <form class="form-floating">
          <input type="text" class="form-control" id="floatingInputValue" placeholder="0">
          <label for="floatingInputValue">Vor- und Nachname</label>
        </form>
      </div>
      <br>

      <!-- Email -->
      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
          </svg>
        </span>
        <form class="form-floating">
          <input type="email" class="form-control" id="floatingInputValue" placeholder="name@test.com">
          <label for="floatingInputValue">E-Mail</label>
        </form>
      </div>
      <br>

      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
            <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354"/>
          </svg>
        </span>
        <form class="form-floating">
          <input type="text" class="form-control" id="floatingInputValue" placeholder="0" >
          <label for="floatingInputValue">Betreff</label>
        </form>
      </div>
      <br>

      <div class="input-group mb-3">
        <span class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
          </svg>
        </span>
        <form class="form-floating">
          <textarea class="form-control" placeholder="Schreibe eine Nachricht!" id="floatingTextarea2" style="height: 120px"></textarea>
          <label for="floatingTextarea2">Nachricht</label>
        </form>
      </div>
      <br>


<!-- button nachricht senden Eberhart fragen!! -->
      <button class="btn btn-primary d-grid gap-2 col-6 mx-auto" type="submit" name="login-button"  width="100">Nachricht senden</button>
      



    </div> <!-- ende card -->
  </div> <!-- ende col -->
  <br><br><br><br>
</div> <!-- ende row -->


<!-- Form für Nachricht senden EBERHART FRAGEN!!! -->
<?php 
  if(isset($_GET['korrekt'])){
    $hans = $_GET['korrekt'];
    echo $hans;
  }
?>

<form method="POST" action="functions/login2.php">
  <div class="mb-3">
    <label for="em" class="form-label">E-Mail</label>
    <input type="email" name="email" class="form-control" id="em" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pw" class="form-label">Passwort</label>
    <input type="password" name="passwort" class="form-control" id="pw">
  </div>
  <div class="card-footer">
    <button type="submit" name="login-button" class="btn btn-primary">Login</button>
  </div>
</form>


<!-- Css -->
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

.card{
  border: #ffffff; 
}

.card-text{
  font-size: 15px;
  font-weight: 400;
}

.card-title{
  font-size: 20px;
  font-weight: 600;
}

</style>

</html>