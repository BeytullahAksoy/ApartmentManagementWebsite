<?php
session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';



$username = $_POST['userName-r'];
$password = $_POST['password-r'];

$email = $_POST['email-r'];
$phone = $_POST['phone-r'];

$admin = $_POST['admin-r'];
$floor = $_POST['floor-r'];

$number = $_POST['number-r'];
$first = $_POST['firstName-r'];

$last = $_POST['lastName-r'];

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$flat = $con->prepare("select flat_id from flats where number='$number' and floor = '$floor'");



$flat->execute();
	// Store the result so we can check if the account exists in the database.
	$flat->store_result();

	if ($flat->num_rows > 0) {
	$flat->bind_result($flat_id_sorgu);
	$flat->fetch();


$hash2 = password_hash($password, PASSWORD_DEFAULT);

$sql =$con -> prepare("insert into accounts(username,password,email,phoneNumber,admin,flat_id,FirstName,lastName,loan)  values('$username','$hash2','$email','$phone','$admin','$flat_id_sorgu','$first','$last',0)");
echo "The member added.";
echo "<script>

window.location.href='add.php';
</script>";
$sql->execute();


exit;


	}





?>  