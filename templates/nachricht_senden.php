<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "brustl.anja@gmail.com"; // Ersetze dies durch deine E-Mail-Adresse
    $subject = "Neue Nachricht von Apo-Supply";
    $body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Es gab ein Problem beim Senden der Nachricht.";
    }
}
?>