<?php



	session_start();





$rate = $_POST['rate'];

$_SESSION['monthRate'] = $rate;



echo "olduoldutm";

echo $_SESSION['monthRate'];




?>