<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $betreff = htmlspecialchars($_POST['betreff']);
    $message = htmlspecialchars($_POST['message']);

    $to = "service@aposupply.digbizmistelbach.info"; 
    $subject = "Neue Nachricht von Apo-Supply";
    $body = "Name: $name\n E-Mail: $email\n Betreff: $betreff\n Nachricht:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
      ?>
        <div class="alert alert-info" role="alert">
          Ihre Nachricht ist erfolgreich bei uns eingegangen.
        </div>
      <?php
    } else {
      ?>
        <div class="alert alert-info" role="alert">
          Es gab ein Problem beim Senden der Nachricht. Versuchen Sie es später erneut!
        </div>
      <?php
    }
}
?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dankeschön
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="../logo_richtig.png" type="image/x-icon">
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

    <h1 style="font-weight: 700; letter-spacing: 0.5px; font-size: 45px;">Danke für Ihr Feedback! &#129321; </h1>
    <br>

	<div class="alert alert-info" role="alert">
	  Ihre Nachricht ist erfolgreich bei uns eingegangen.
	</div>
		
<p style="font-weight: 500; font-size: 18px;">Wir nehmen uns Ihre Nachrichten sehr zu Herzen und werden versuchen, dementsprechend darauf zu reagieren. Bitte haben Sie Verständnis, wenn es einmal zu einer Verzögerung unserer Antwort kommen könnte. Danke! </p>

		<br>
<a href="templates/kontakt.php" class="btn umfrage_btn" tabindex="-1" role="button" aria-disabled="true">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  		<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
	</svg> zurück zur Website</a>

		
	</body>
  
</html>

  
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
	  
.umfrage_btn{
  border-radius: 30px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.6);
  background-color: rgba(0,170,255,0.3);
  font-weight: 700;
  letter-spacing: 0.5px;
}

.umfrage_btn:hover{
  border-radius: 30px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.8);
  transform: translateY(0) scale(1.07);
  background-color: #00aaff;
}
	  
.alert-info{
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.6);
  background-color: rgba(0,170,255,0.6);
  font-weight: 500;
  color: black;
  letter-spacing: 0.5px;
  border-color: #00aaff;
  font-size: 18px;
	
  animation: sweep 1.5s ease-in-out;}

@keyframes sweep {
  0%    {opacity: 0; margin-left: -20px}
  100%  {opacity: 1; margin-left: 0px}
}
	  
@media (max-width: 576px) {
    h1 {
        font-size: 35px; 
    }
    h3 {
        font-size: 18px;
    }
    p {
        font-size: 17px;
    }
}

@media (min-width: 577px) and (max-width: 992px) {
    h1 {
        font-size: 36px; 
    }
    h3 {
        font-size: 20px;
    }
    p {
        font-size: 17px;
    }
}


@media (min-width: 993px) {
    h1 {
        font-size: 45px;
    }
    h3 {
        font-size: 22px;
    }
    p {
        font-size: 18px;
    }
}


  </style>