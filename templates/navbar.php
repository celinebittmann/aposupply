<!-- <div class="container"> -->
<nav class="navbar navbar-expand-lg navbar bg-white fixed-top solid black border-body" data-bs-theme="black" style="border-bottom: 2px solid grey;"> <!-- Linie unten -->
  <div class="container-fluid">
    <a class="navbar-brand offset-1" href="index.php"><img src="assets/img/logoapo.png" height="50" width="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> <!-- Burger -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link me-4" aria-current="page" href="app.php">Unsere App</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="templates/umwelt.php">Nachhaltigkeit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="templates/team.php">Über uns</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="templates/qa.php">Q&A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="templates/kontakt.php">Kontaktiere uns!</a>
        </li>
      </ul>
             <ul class="navbar nav">
  <li>
    <a href="templates/video.php" class="btn btn-secondary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-square-fill" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4z"/>
      </svg>
    </a>
  </li>
</ul>                
      </ul>
    </div>
    </div>
  </div>
  <a class="navbar-brand offset-1"></a>
</nav>



<style>
.nav-link {
  position: relative;
  text-decoration: none;
  color: #000; /* Textfarbe */
}

.nav-link::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 1.4px; /* Dicke der Linie */
  background-color: #00aaff; /* Farbe der Linie */
  transition: all 0.5s ease; /* Dauer und Animationseffekt */
  transform: translateX(-50%);
}

.nav-link:hover::after {
  width: 100%; /* Linie wird über die ganze Breite gezogen */
  left: 0; /* Startet am linken Rand */
  transform: translateX(0); /* Zentriert */

}

  </style>
