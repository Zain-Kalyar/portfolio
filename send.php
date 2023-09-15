<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Process and send the email here
    // You can use the PHP mail() function or a library like PHPMailer

    // Example using PHP mail() function
    $to = "zainkalyar01@gmail.com";
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed. Please try again later.";
    }
}
?>
