<?php
error_reporting(-1); 
ini_set('display_errors','On'); 

require __DIR__.'/../includes.php';


if(isset($_GET['nummer'])){

    $rechnungId = $_GET['nummer']; //Nummer von URL

    if(!$rechnungId){ 
        echo "Bitte Rechnung korrekt abfragen."; 
        exit(); 
    } 

    $userId = getCurrentUserId(); 

    session_write_close();

    $orderData = getAuftragForUser($rechnungId,$userId); 
    if(!$orderData){ 
        echo "Daten wurden nicht gefunden."; 
        exit(); 
    }
    
    }
    
    function getAuftragForUser(int $rechnungId,int $userId):?array
    {
        require "database.php";
        
        $sql = "SELECT auftragId,auftragsdatum,userId
                FROM auftrag
                WHERE auftragId = :rechnungId AND userId = :userId
                LIMIT 1
                ";
    
        $statement = $dbh->prepare($sql);
            if(false === $statement){
                echo printDBErrorMessage();
                return null;
            }
    
        $statement->execute([
            ':rechnungId'=>$rechnungId,
             ':userId'=>$userId
                 ]);
    
        if(0 === $statement->rowCount()){
            return null;
        }
           
        $orderData =$statement->fetch();
        $orderData['products'] = [];
        
        $sql = "SELECT id_auftrag,name,anzahl,preis,ust
                FROM auftrag_produkte
                WHERE auftragId = :rechnungId
                ";
       
        $statement = $dbh->prepare($sql);
            if(false === $statement){
                echo printDBErrorMessage();
                return null;
            }
    
        $statement->execute([
            ':rechnungId'=>$rechnungId
                 ]);
    
        if(0 === $statement->rowCount()){
            return null;
        }
    
        while($row = $statement->fetch()){
            $orderData['products'][]=$row;
        }
        
        return $orderData;
    }