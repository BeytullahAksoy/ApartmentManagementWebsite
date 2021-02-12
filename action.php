<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'apartment');

$input = filter_input_array(INPUT_POST);

$userID = mysqli_real_escape_string($connect, $input["userID"]);
$userName = mysqli_real_escape_string($connect, $input["userName"]);
$eMail = mysqli_real_escape_string($connect, $input["eMail"]);
$phone = mysqli_real_escape_string($connect, $input["phone"]);
$floorNumber = mysqli_real_escape_string($connect, $input["floorNumber"]);
$password = mysqli_real_escape_string($connect, $input["password"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE tbl_user 
 SET first_name = '".$first_name."', 
 last_name = '".$last_name."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM tbl_user 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>