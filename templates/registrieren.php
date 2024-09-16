<?php
    // require(__DIR__.'/../includes.php');
?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrieren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/sportshop4dk/">
</head>
  <body>
    <?php
    require "navbar.php";
    ?>
    <div class="container">

    <br><br>
    <h1>Registrieren</h1>

    <?php
    require __DIR__.'/../includes.php'; 
        if(isset($_GET['nichtkorrekt'])){
            $franz = $_GET['nichtkorrekt'];
            echo $franz;
        }
    ?>

    <form method="POST" action="functions/registrieren2.php">
  <div class="mb-3">
    <label for="em" class="form-label">E-Mail</label>
    <input type="email" name="email" class="form-control" id="em" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="pw" class="form-label">Passwort</label>
    <input type="password" name="passwort" class="form-control" id="pw" required>
  </div>

  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label for="vn" class="form-label">Vorname</label>
        <input type="text" name="vorname" class="form-control" id="vn" required>
      </div>
    </div> <!-- Ende col -->
    <div class="col">
      <div class="mb-3">
        <label for="nn" class="form-label">Nachname</label>
        <input type="text" name="nachname" class="form-control" id="nn" required>
      </div>
    </div> <!-- Ende row -->
  </div>

  <div class="mb-3">
    <label for="st" class="form-label">Strasse und Nr.</label>
    <input type="text" name="strasse" class="form-control" id="st">
  </div>

  <div class="row">
    <div class="col-3">
      <div class="mb-3">
        <label for="plz" class="form-label">PLZ</label>
        <input type="num" name="plz" class="form-control" id="plz">
      </div>
    </div> <!-- Ende col -->
    <div class="col-9">
      <div class="mb-3">
        <label for="ort" class="form-label">Ort</label>
        <input type="text" name="ort" class="form-control" id="ort">
      </div> <!-- Ende col -->
    </div> <!-- Ende row -->
  </div>


  






  <button type="submit" name="regi-button" class="btn btn-primary">Registrieren</button>
    </form>

    

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>