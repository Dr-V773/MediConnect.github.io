<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);

    $to = "your-email@example.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nLocation Interests: $location";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "There was an error sending your submission. Please try again.";
    }
}
?>
