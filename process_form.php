<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $recipient = "helleugilles@gmail.com";
    $subject = "New message from the contact form";
    $message_body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nMessage:\n$message";
    mail($recipient, $subject, $message_body);

    header("Location: confirmation.php");
    exit();
}
?>
