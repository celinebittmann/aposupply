<?php

function createAuftrag(int $userId, array $korbVonKunde):bool{
    require "database.php";
    $sql = "INSERT INTO auftrag SET
            userId = :userId
        ";
        $statement = $dbh->prepare($sql);
        $statement->execute([
            ':userId'=>$userId
           ]);

        //    letzte id wird gesucht
        $auftragId = $dbh->lastInsertId();

        //    session erstellt
        $_SESSION['auftragId'] = $auftragId;
        

        // in die Tabelle auftrag_produkte schreiben
        $sql = "INSERT INTO auftrag_produkte SET
        name=:name,
        anzahl=:anzahl,
        preis=:preis,
        ust=:ust,
        auftragId=:auftragId
        ";
        
        $statement = $dbh->prepare($sql);
        foreach($korbVonKunde as $korbVonKundeDetail){
            $data = [
            ':name'=>$korbVonKundeDetail['name'],
            ':anzahl'=>$korbVonKundeDetail['anzahl'],
            ':preis'=>$korbVonKundeDetail['preis'],
            ':ust'=>20,
            ':auftragId'=>$auftragId, //siehe Zeile 14
        ];
        $statement->execute($data);
    }
    return true; //weil oben ein bool verlangt wurde
    


}