<?php



	session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


$username = $_POST['selected'];




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



if($stmt = $con->prepare("update accounts set flat_id=0   where username = '$username' ")){


$stmt->execute();
echo "tmm";
exit();




}




?>