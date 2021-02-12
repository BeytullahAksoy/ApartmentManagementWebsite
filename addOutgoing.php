<?php


session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartment';
$content =$_POST['content'];
$description = $_POST['description'];
$amount = $_POST['amount'];

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$admin = $_SESSION['adminID'];
$myDate =  date('Y-m-d');

	$mysqli = new mysqli("localhost","root","","apartment");


$sql = "insert into outgoing (name ,amount,description,adminID,date) values
	('$content','$amount','$description','$admin','$myDate')";
$result = $mysqli->query($sql);
   
   

    $sql = "UPDATE cashbox
SET amount = (amount - '$amount')";
   $result = $mysqli->query($sql);












?>
<script type="text/javascript">alert("The amounts added");window.location.href='due.php';
    </script>


