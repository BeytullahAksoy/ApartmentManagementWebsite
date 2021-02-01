<?php


session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';
$masraf =(int) $_POST['masraf'];
$explain = $_POST['explain'];
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$myDate =  date('Y-m-d ');
$stmtt = $con->prepare( "INSERT INTO loans(explaining,loan,datee)
        VALUES('$explain','$masraf','$myDate')" );

$stmt = $con->prepare("UPDATE accounts SET loan =loan + ? ");
$stmt->bind_param("s", $masraf);
echo $myDate;
echo $explain;
echo "The loan ";
echo $masraf;
echo "added.";






$stmt->execute();
$stmtt->execute();
echo "<script>

window.location.href='loan.php';
</script>";
exit();

?>