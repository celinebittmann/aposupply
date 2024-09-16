<?php

function isLoggedIn():bool{ 
return isset($_SESSION['userId']); 

} 

function getCurrentUserId() 
{ 
    session_start(); 
    $userId = 0; 
    if(isset($_SESSION['userId'])){  

        $userId = (int) $_SESSION['userId']; 

    } 
    return $userId; 

} 