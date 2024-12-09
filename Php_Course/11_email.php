<?php
$to = "recipient@example.com";  // Replace with the recipient's email address
$subject = "Test Email";
$message = "Hello, this is a test email sent from a PHP script!";
$headers = "From: sender@example.com";  // Replace with the sender's email address

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
