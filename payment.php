

 <?php 



session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';



$price = $_POST['price'];  
$username= $_SESSION['userName'];




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



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


$stmt2 = $con->prepare('INSERT INTO `paids`(account_id,amount,theDate)
        VALUES("'.$bunuyaz.'",  "'.$price.'", "'.$myDate.'")');




$stmt2->execute();


$stmt->execute();
echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
exit();








    }












}





?>.






