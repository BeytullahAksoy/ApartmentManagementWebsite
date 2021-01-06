Merhaba


 <?php 



session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';



$price = $_POST['price'];  
$username= $_SESSION['userName'];

 echo $price;


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



if($stmt = $con->prepare("update accounts set loan = loan -'$price'   where username = '$username' ")){


$resulted = mysqli_query($con, "SELECT id FROM accounts WHERE userName =   '$username'     ");







if(mysqli_num_rows($resulted) > 0) {
     $row = mysqli_fetch_assoc($resulted);
      print_r($row['id']);
      $bunuyaz = $row['id'];



$myDate =  date('Y-m-d ');
echo "  accid   ";
echo $bunuyaz;


echo "  price   ";
echo $price;




$stmt2 = $con->prepare('INSERT INTO `paids`(account_id,amount,theDate)
        VALUES("'.$bunuyaz.'",  "'.$price.'", "'.$myDate.'")');


echo "budatmm";

$stmt2->execute();


$stmt->execute();
echo "tmm";
exit();








    }












}





?>.






