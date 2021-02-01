<?php



	session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


$username = $_POST['selected'];




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



if($stmt = $con->prepare("INSERT INTO leftpersons (id_left,username_left,FirstName_left,lastName_left,	flat_id_left,phoneNumber_left,loan)
SELECT id,username, 	FirstName, 	lastName, flat_id,phoneNumber,loan
FROM accounts
WHERE username = '$username' ")){


	$stmtt =  $con ->prepare("DELETE FROM accounts WHERE username = '$username';");

$stmt->execute();
$stmtt -> execute();

echo "The member deleted. ";
echo "<script>

window.location.href='delete.php';
</script>";
exit();




}




?>