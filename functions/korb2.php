<?php

error_reporting(-1); 
ini_set('display_errors','On'); 

// require "../includes.php"; falsch

require __DIR__.'/../includes.php';


$userId = getCurrentUserId();

function countProdukte(int $userId){
    require "database.php";
    $korbzahl = 0;
    $sql = "SELECT COUNT(wid) FROM warenkorb WHERE u_id = $userId";
    $korbVorZahl = $dbh->query($sql);
    $korbzahl = $korbVorZahl->fetchColumn();
    return $korbzahl;
    
}

$korbzahl = countProdukte($userId);

// warenkorb befüllen

if(isset($_GET['zumKorb'])){
    $produktId= $_GET['zumKorb'];
    addProduktZuWarenkorb($userId, $produktId);

    header('Location: ../shop.php');
    exit();

}

function addProduktZuWarenkorb($userId, $produktId){

    require "database.php";

    $sql1 ="SELECT anzahl FROM warenkorb WHERE  
    u_id =" .$userId." AND  
    p_id =" .$produktId; 
    $row = $dbh->query($sql1); 
    $anzahl = $row->fetchColumn(); 


    if($anzahl < 1){ 

    $sql = "INSERT INTO warenkorb SET
    p_id = :produktId,
    u_id = :userId,
    anzahl = 1";

$statement = $dbh->prepare($sql); 
$statement->execute([ ':produktId'=>$produktId, ':userId' =>$userId]); 
}
}

function getKorbVonKunde(int $userId):array
{
    require "database.php";

    $sql = "SELECT produkte.p_id,name,beschreibung,farbe,preis,warenkorb.anzahl,bild  
    FROM produkte 
    JOIN warenkorb 
    ON warenkorb.p_id = produkte.p_id 
    WHERE warenkorb.u_id = ". $userId; 


    $results = $dbh->query($sql); 
    if($results === false){ 
        return [];}
        $korbVonKunde = [];
    while($row = $results->fetch()){ 
        $korbVonKunde[]=$row; 
        
    
    } 

    return $korbVonKunde; 
}

function getSummeFuerUserId(float $userId):float 
{  

    require "database.php"; 

    $sql = "SELECT SUM(preis * warenkorb.anzahl)  
    FROM produkte 
    JOIN warenkorb 
    ON warenkorb.p_id = produkte.p_id 
    WHERE warenkorb.u_id = ". $userId;

    $results = $dbh->query($sql); 


    if($results === false){ 
    return 0; 
    } 

    return (float)$results->fetchColumn();


} 

$korbSumme = getSummeFuerUserId($userId); 


if(isset($_GET['addiereZumWarenkorb'])){
    $produktId = $_GET['addiereZumWarenkorb'];
    addEinsZumKorb($userId, $produktId);

    header("Location: ../templates/korb.php");
    exit();
}


function addEinsZumKorb($userId, $produktId){
    require "database.php";

    $sql = "INSERT INTO warenkorb SET
    p_id = :produktId,
    u_id = :userId,
    anzahl = 1
    ON DUPLICATE KEY UPDATE anzahl = anzahl +1";

$statement = $dbh->prepare($sql); 
$statement->execute([ ':produktId'=>$produktId, ':userId' =>$userId]); 

}


//minus

if(isset($_GET['subVonWarenkorb'])){
    
    $produktId = $_GET['subVonWarenkorb'];
   abziehenVomKorb($userId, $produktId);

    header("Location: ../templates/korb.php");
    exit();
}

function abziehenVomKorb($userId, $produktId){
    require "database.php";


    $sql1 = "SELECT anzahl FROM warenkorb WHERE
    u_id =" .$userId." AND  
    p_id =" .$produktId; 
    $row = $dbh->query($sql1); 
    $anzahl = $row->fetchColumn(); 

    if($anzahl >=1){

    $sql = "INSERT INTO warenkorb SET
    p_id = :produktId,
    u_id = :userId,
    anzahl = 1
    ON DUPLICATE KEY UPDATE anzahl = anzahl -1";

$statement = $dbh->prepare($sql); 
$statement->execute([ ':produktId'=>$produktId, ':userId' =>$userId]); 
    }else{
        $anzahl = 0;
    }

}


function clearWarenkorb(int $userId){ 

    require "database.php";
    $sql = "DELETE FROM warenkorb WHERE u_id = :userId"; 
    $statement = $dbh->prepare($sql); 
    $statement->execute([ 
        ':userId' => $userId 
    ]); 

} 