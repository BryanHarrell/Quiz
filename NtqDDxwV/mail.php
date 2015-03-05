<?php
$message = $_POST['name'];
$message .= $_POST['html'];
$message .= $_POST['data2'];
$to  = $_POST['email'];
$headers = "From: info@egogram.sk\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,'EGOGRAM',$message,$headers);
?>