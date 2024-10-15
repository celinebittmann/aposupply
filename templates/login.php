
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <base href="/sportshop4dk/">
</head>
  <body>
    <?php
  require __DIR__.'/../includes.php'; 
    require "navbar.php";
    ?>
    <div class="container">

    
    <br><br>
    <h1>Anmelden</h1>

    <?php
        if(isset($_GET['regok'])){
            $hans = $_GET['regok'];
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
  <button type="submit" name="login-button" class="btn btn-primary">Login</button>
    </form>

    

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>