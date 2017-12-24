
<?php
$to      = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_GET['from'] . "\r\n" .
      

mail($to, $subject, $message, $headers);
?> 
