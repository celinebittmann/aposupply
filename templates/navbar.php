<div class="container">
<nav class="navbar navbar-expand-lg navbar bg-white border-bottom border-body" data-bs-theme="black">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/img/logoapo.png" height="50" width="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> <!-- Burger -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="app.php">Unsere App</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-show" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Kategorien
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="templates/trikots.php">Trikots</a></li>
            <li><a class="dropdown-item" href="templates/schuhe.php">Schuhe</a></li>
            <li><a class="dropdown-item" href="templates/hosen.php">Hosen</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="templates/umwelt.php">Nachhaltigkeit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="templates/team.php">Über uns</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="templates/qa.php">Q&A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="templates/kontakt.php">Kontaktiere uns!</a>
        </li>
       
      </ul>
      <ul class="navbar nav">
        
      <li>  
        <?php 
        if(isLoggedIn()):?> 
            <a class="nav-link">Du bist eingeloggt als:&nbsp; <?php echo $_SESSION['email'] ?>&nbsp;&nbsp; 
            </a> 
        </li> 
        <li> 
            <a href="templates/logout.php">  
              <button class="btn btn-danger">Logout</button> 
            </a>   
      </li> 

      <?php endif;?>

      <?php 
        if(!isLoggedIn()):?> 
      <li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/></svg></button>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="templates/login.php">Login</a></li>
            <!-- <li><span class="dropdown-item-text">Du bist noch nicht angemeldet?</span></li> -->
            <!-- <li><a class="dropdown-item" href="templates/registrieren.php">Hier registrieren!</a></li> GEHT NICHT WEGEN DATENBANK-->
          </ul>
        </div>

      </li>

      
        &nbsp;
         <a button class="btn btn-" href="templates/registrieren.php">Registrieren</button> </a>
        &nbsp;

        
          
        <?php endif;?>

       
      </ul>
    </div>
    </div>
  </div>
</nav>