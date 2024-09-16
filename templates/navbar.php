<nav class="navbar navbar-expand-lg navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/img/shirty.jpg" height="50" width="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> <!-- Burger -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="templates/team.php">Team</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategorien
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="templates/trikots.php">Trikots</a></li>
            <li><a class="dropdown-item" href="templates/schuhe.php">Schuhe</a></li>
            <li><a class="dropdown-item" href="templates/hosen.php">Hosen</a></li>
          </ul>
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
          <a button class="btn btn-success" href="templates/login.php">Login</button> </a>
          &nbsp;
          <a button class="btn btn-secondary" href="templates/registrieren.php">Registrieren</button> </a>
      </li>
      <?php endif;?>
      <li><a class="nav-link" href="templates/korb.php"> Warenkorb(<?= $korbzahl?>)</a>
        <li>
      </ul>
    </div>
  </div>
</nav>