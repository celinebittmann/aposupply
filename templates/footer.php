<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../functions/mystyle.css"rel="stylesheet">
    <base href="/aposupply/">
</head>
  <body>
    <?php
    //  require __DIR__.'/../includes.php'; 
    ?>
  </body>



<footer>
<div class="container_footer">
  <br><br>
    <div class="row center">

      <div class="col-4">
        <h5 class="ueberschrift_klein">Rechtliches</h5>
        <br>
        <p class="p_footer"><a class="link_footer" href="templates/impressum.php">Impressum</a></p>
        <p class="p_footer"><a class="link_footer" href="templates/agb.php">AGB</a></p>
        <p class="p_footer"><a class="link_footer" href="templates/datenschutz.php">Datenschutz</a></p>
      </div>

      <div class="col-4">
        <h4 class="ueberschrift">Apo-Supply</h4>
        <br>
        <p class="p_footer">Edmund-Freibauer-Promenade 1</p>
        <p class="p_footer">2132 Mistelbach</p>
        <p class="p_footer">02572/2305-350</p>
        <p class="p_footer_email">service@aposupply.digbizmistelbach.info</p>
        <br><br>
      </div>

      <div class="col-4">
        <h5 class="ueberschrift_klein">Weitere Links</h5>
        <br>
        <p class="p_footer"><a class="link_footer" href="templates/kontakt.php">Kontakt</a></p>
        <p class="p_footer"><a class="link_footer" href="templates/team.php">Über uns</a></p>
        <p class="p_footer"><a class="link_footer" href="templates/qa.php">Q&A</a></p>
        <p class="p_footer"><a class="link_footer" href="templates/app.php">App</a></p>
      </div>

   </div> <!-- Ende row -->

</div> <!-- Ende container -->

  <div class="row copy ">
    <div class="col-3">
    </div>

    <div class="col-2">
    </div>

    <div class="col-3">
      <p class="copyright"><br>© 2025 Apo-Supply. Alle Rechte vorbehalten.</p>
    </div>
  
  </div>

</footer>




<style>
footer{
  background-color: #202731;
  color: white;
}

.center{
  text-align: center;  
}

/* Links im Footer */
.link_footer{
  text-decoration: none;
  color: white;
  
}

.link_footer:hover{
  text-decoration: underline;
  color: #00aaff;
  
}


/* farbverlauf bei schriften */
@keyframes example_footer {
  0%   {color:#d7f8fe;}
  25%  {color:#6ae8fe;}
  50%  {color:#00aaff;}
  75%  {color:#6ae8fe;}
  100% {color:#d7f8fe;}
}



/* Apo schrift in der mitte */
.ueberschrift{
  text-decoration: none;
  font-weight: 700;
  color: white;
  letter-spacing: 2px;
  
}

.ueberschrift:hover{
  text-decoration: none;
  color: #00aaff;
  letter-spacing: 3px;

  position: relative;
  background-color: #202731;
  animation-name: example_footer;
  animation-duration: 3s;
  animation-iteration-count: 10;
  
}


/* Links schrift auf beiden seiten */
.ueberschrift_klein{
  text-decoration: none;
  font-weight: 500;
  color: white;
  letter-spacing: 1px;
}

.ueberschrift_klein:hover{
  text-decoration: none;
  color: #00aaff;
  letter-spacing: 2px;

  position: relative;
  background-color: #202731;
  animation-name: example_footer;
  animation-duration: 3s;
  animation-iteration-count: 10;
}


.copyright{
  font-size: 13px;
}

.copy{
  background-color: black;
}


@media (max-width: 576px) {
    .ueberschrift_klein {
        font-size: 18px;
    }
    .p_footer {
        font-size: 17px;
    }
    .p_footer_email{
        font-size: 14px;
    }
}


@media (min-width: 577px) and (max-width: 992px) {
    .ueberschrift_klein {
        font-size: 20px;
    }
    .p_footer {
        font-size: 18px;
    }
    .p_footer_email{
        font-size: 17px;
    }
}


@media (min-width: 993px) {
    .ueberschrift_klein {
        font-size: 20px;
    }
    .p_footer {
        font-size: 17px;
    }
    .p_footer_email{
        font-size: 17px;
    }
}



</style>