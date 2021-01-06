<?php


session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';
$masraf =(int) $_POST['masraf'];
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


echo $masraf;
$stmt = $con->prepare("UPDATE accounts SET loan =loan + ? ");
$stmt->bind_param("s", $masraf);

echo "done";
$stmt->execute();
exit();

?>