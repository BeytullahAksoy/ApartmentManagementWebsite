<?php
$check = '1';
$check2 = $_GET['admin'];



if($check2==$check){

header("Location:admin.html");

}

else{

header("Location:user.html");

}
	





?>