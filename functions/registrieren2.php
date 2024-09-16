<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

if(isset($_POST['regi-button'])) {
    $email = $_POST['email']; //hinten von input
    $passwort = $_POST['passwort']; //hiten in $_POST von input
    $vn = $_POST['vorname'];
    $nn = $_POST['nachname'];
    $st = $_POST['strasse'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];

    require "database.php";

    //abfrage ob email schon vorhanden ist
    $sql1 = "SELECT email FROM user WHERE email = :EMail";
    
    $statement1 = $dbh->prepare($sql1); 
    $statement1->execute([
        ':EMail'=>$email 
    ]); 

    if($email = "")
    {

    }

    $row1 = $statement1->fetch(); 

    $sql = "INSERT INTO user(email,passwort,vorname,nachname,strasse,plz,ort) VALUES(:EMail,:Passwort,:Vorname,:Nachname,:Strasse,:Plz,:Ort)";
    $statement = $dbh->prepare($sql); 
    $statement->execute([ 
        ':EMail'=>$email,
        ':Passwort'=>$passwort,
        ':Vorname'=>$vn,
        ':Nachname'=>$nn,
        ':Strasse'=>$st,
        ':Plz'=>$plz,
        ':Ort'=>$ort

        ]); 

    $row = $statement->fetch(); 

    header('Location: ../templates/login.php?regok=<div class="alert alert-success"> Korrekt angemeldet</div>');
    }
    else
    {
        header('Location: ../templates/registrieren.php?nichtkorrekt=<div class="alert alert-danger"> Bitte korrekt anmelden</div>');
    }
?>
