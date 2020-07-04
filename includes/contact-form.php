<?php
session_start();
if (!isset($_POST['submit']))
{
    echo "Error. The form must be submited";
}
$name = $_POST['name'];
$user_email = $_POST['email'];
$reason = $_POST['reason'];
$message = $_POST['message'];

if (empty($name) || empty($user_email))
{
    echo "The name and the email are both mandatory";
    exit;
}

$email_subject = "[$reason] $name ($user_email)";
$email_body = "$message";
$email_to = "contact@lycoon.net";
$headers = "From: $user_email\r\n";

if(mail($email_to, $email_subject, $email_body, $headers)) {
	$_SESSION['isSent'] = "ok";
}
else {
	$_SESSION['isSent'] = "no";
}
header('Location: ../#contact');
?>
