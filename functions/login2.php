<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

if(isset($_POST['login-button'])) {
    $email = $_POST['email']; //hinten von input
    $passwort = $_POST['passwort']; //hiten in $_POST von input
    $hashpwd = MD5($userpwd);

    require "database.php";

    $sql = "SELECT u_id,email,passwort FROM user WHERE email = :EMail"; 
    
    $statement = $dbh->prepare($sql); 
    $statement->execute([ 
        ':EMail'=>$email 
        ]); 

    $row = $statement->fetch(); 

    if($passwort == $row['passwort']){
        
        session_start();
        $_SESSION['userId'] = $row['u_id'];
        $_SESSION['email'] = $row['email']; 

        header("Location: ../shop.php");
        exit();
    }
    else{
        header("Location: ../index.php");
        exit();
    }
    } 
else
{
header("Location: ../index.php");
}
