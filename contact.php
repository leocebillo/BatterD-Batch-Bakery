<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "yourbakery@email.com";
    $subject = "New Order Inquiry from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "<p>Thank you! Your message has been sent.</p>";
    } else {
        echo "<p>Oops! Something went wrong.</p>";
    }
}
?>
