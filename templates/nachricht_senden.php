<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $betreff = htmlspecialchars($_POST['betreff']);
    $message = htmlspecialchars($_POST['message']);

    $to = "service@aposupply.digbizmistelbach.info"; 
    $subject = "Neue Nachricht von Apo-Supply";
    $body = "Name: $name\n E-Mail: $email\nNachricht:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Es gab ein Problem beim Senden der Nachricht.";
    }
}
?>