<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['userName'])) {
		$update_field.= "userName='".$input['userName']."'";
	} else if(isset($input['eMail'])) {
		$update_field.= "eMail='".$input['eMail']."'";
	} else if(isset($input['phone'])) {
		$update_field.= "phone='".$input['phone']."'";
	} else if(isset($input['floorNumber'])) {
		$update_field.= "floorNumber='".$input['floorNumber']."'";
	} 
	if($update_field && $input['id']) {
		$sql_query = "UPDATE developers SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}


