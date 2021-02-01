<?php
session_start();
  $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


 $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);




if ($st = $con->prepare('SELECT loan
FROM accounts WHERE username = ?' )) {

$st->bind_param('s', $_SESSION['userName']);
  $st->execute();
  // Store the result so we can check if the account exists in the database.
  $st->store_result();



$st->bind_result($loan);

  $st->fetch();

  $_SESSION['loan'] = $loan;
  

}














?>

 <?php




// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';



$price = $_POST['price'];
$username= $_SESSION['userName'];




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if($_SESSION['loan']< $_POST['price']){

    echo "<script>
alert('Wrong Payment');
window.location.href='pay-r.php';
</script>";
}

if($_SESSION['loan']>= $_POST['price']){
    if($stmt = $con->prepare("update accounts set loan = loan -'$price'   where username = '$username' ")){


        $resulted = mysqli_query($con, "SELECT id FROM accounts WHERE userName =   '$username'     ");







        if(mysqli_num_rows($resulted) > 0) {
            $row = mysqli_fetch_assoc($resulted);

            $bunuyaz = $row['id'];



            $myDate =  date('Y-m-d ');
            echo "Success.  ";



            echo "  Price   ";
            echo $price;

            echo " has paid.   ";


            $stmt2 = $con->prepare('INSERT INTO `payments`(account_id,amount,theDate)
        VALUES("'.$bunuyaz.'",  "'.$price.'", "'.$myDate.'")');




            $stmt2->execute();


            $stmt->execute();
            echo "<script>

window.location.href='pay-r.php';
</script>";








        }




    }







}





?>.






