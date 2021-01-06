<?php 



session_start();



$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


$masraf = $_POST['textt'];

$today = date("F j, Y, g:i a");

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$stmt = $con->prepare("insert into announcements(text,datee) values (?,'$today' ) ");
$stmt->bind_param("s", $masraf);

echo " Announcement Created";
echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
$stmt->execute();
exit();



 ?>