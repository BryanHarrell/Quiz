<?php 
if(!session_id()) session_start();
$first = $_SESSION['first'];
$second = $_SESSION['second'];
$third = $_SESSION['third'];
$fourth = $_SESSION['fourth'];
$fifth = $_SESSION['fifth'];
header('Content-Type: application/json');
echo json_encode( array( "first"=>"$first","second"=>"$second","third"=>"$third","fourth"=>"$fourth","fifth" => "$fifth") ); ?>
