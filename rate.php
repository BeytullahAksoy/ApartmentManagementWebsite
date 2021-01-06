<?php



	session_start();





$rate = $_POST['rate'];

$_SESSION['monthRate'] = $rate;

echo "Pay rate defined.";

echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";






?>