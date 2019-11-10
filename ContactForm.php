<?php

if (isset($_POST['Send Message']))
$name = $_POST['name'];
$mailfrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "jules26@alexrbls.net";
$headers = "From: ".$mailFrom">;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
headers("Location: index.php?mailsend");
}