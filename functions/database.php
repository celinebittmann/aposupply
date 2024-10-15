<?php 
//   error_reporting(-1); 
//   ini_set('display_errors', 'On'); 

// $host_name = 'localhost:3306'; 
// $database = '25_aposupply-projekt'; 
// $user_name = 'celineanja'; 
// $password = '25-celineanja'; 

// $dbh = null; 
//   try 
//   {
//     $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
//   } 
//   catch (PDOException $e) 
//   { 
//     echo "Fehler!: " . $e->getMessage() . "<br/>"; 
//     die(); 
//   }  -->


?> 
 <?php 
  error_reporting(-1); 
  ini_set('display_errors', 'On'); 

$host_name = 'localhost'; 
$database = 'schueler'; 
$user_name = 'root'; 
$password = ''; 

$dbh = null; 
  try 
  {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } 
  catch (PDOException $e) 
  { 
    echo "Fehler!: " . $e->getMessage() . "<br/>"; 
    die(); 
  } 


?> 