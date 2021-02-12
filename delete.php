<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string
 $today =  date('Y-m-d ');

$result = mysqli_query($db,"SELECT amount from dues where duesID = '$id'");
 if(mysqli_num_rows($result) > 0) {
     $row = mysqli_fetch_assoc($result);
     $amount = $row['amount'];
    }




$insert = mysqli_query($db,"INSERT INTO payments (userID,duesID,amount,date)
SELECT userID , duesID,amount,date
FROM dues
WHERE duesID = '$id'"); // delete query

echo $id;
$del = mysqli_query($db,"delete from dues where duesID = '$id'"); // delete query
$cash = mysqli_query($db,"UPDATE cashbox
SET amount = amount+ $amount;
"); 














if($insert)
{
	if($del){
	
	if($cash){
	
	
    mysqli_close($db); // Close connection
    echo "here";
    exit;	}}
}

?>