<?php



session_start();



$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartment';


$masraf = $_POST['textt'];

 $today =  date('Y-m-d ');

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$stmt = $con->prepare("insert into announcements(text,date) values (?,'$today' ) ");
$stmt->bind_param("s", $masraf);

echo " Announcement Created";
echo "<script>



</script>";
$stmt->execute();
exit();



?>