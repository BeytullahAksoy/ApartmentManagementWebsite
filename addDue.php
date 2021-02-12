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



$index = 1;

while($index <= 1000){
	$userID = $index;
	
	$mysqli = new mysqli("localhost","root","","apartment");
	$results = $mysqli -> query( "select * from users where userID= '$userID'") ;
	
	$row = mysqli_num_rows($results);

		
	
		
		
	if($row ==0){
	
		

		
		
}else{
   
   
   	echo $content;
	echo $amount;
	echo $description;
	echo $admin;
	echo $myDate;
   

$result = $mysqli->query("insert into dues(duesName,amount,description,adminID,date,userID) values
	('$content','$amount','$description','$admin','$myDate','$userID')");
   
   
   echo "tmm";
}
    
   

 $index++;
 
 }














?>
<script type="text/javascript">alert("The amounts added");window.location.href='due.php';
    </script>


