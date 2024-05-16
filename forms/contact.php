<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'asqag.cutm@gmail.com';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

// Email headers
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Email body
$body = "NEW MESSAGE\n--------------------------\n\n\nMessage: $message\n\n From: $name";

// Uncomment below code if you want to use SMTP to send emails.
// Make sure to enter your correct SMTP credentials

$smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'asqag.cutm@gmail.com',
    'password' => 'xxxx xxxx xxxx xxxx',
    'port' => '465'
);

// Configure SMTP
ini_set("SMTP", $smtp['host']);
ini_set("smtp_port", $smtp['port']);
ini_set("sendmail_from", $receiving_email_address);
ini_set("auth_username", $smtp['username']);
ini_set("auth_password", $smtp['password']);


// Send email
$mailSuccess = mail($receiving_email_address, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSuccess) {
    echo 'OK';
} else {
    echo 'Error sending email';
}
?>
