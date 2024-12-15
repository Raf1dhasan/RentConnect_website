<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent XSS and other attacks
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Simple validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "<h2 style='color: red;'>Error: All fields are required!</h2>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2 style='color: red;'>Error: Invalid email format!</h2>";
        exit;
    }

    // Simulate message handling (e.g., send email or save in the database)
    // You can replace this with actual email sending logic using PHP's mail() function or an external library like PHPMailer
    $to = "info@rentconnect.com"; // Replace with your email address
    $subject = "New Contact Us Message from $name";
    $body = "You have received a new message:\n\nName: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='color: green;'>Thank you, $name. Your message has been sent successfully!</h2>";
    } else {
        echo "<h2 style='color: red;'>Error: Message could not be sent. Please try again later!</h2>";
    }
}
?>
