

<?php
session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

	$_SESSION['con'] = $con;
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['userName'], $_POST['Password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}



// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password,admin,FirstName,lastName, email,phoneNumber FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['userName']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password,$admin,$FirstName,$lastName,$email,$phoneNumber);
	$stmt->fetch();
	



	if (password_verify($_POST['Password'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.











		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['userName'];
		$_SESSION['id'] = $id;
		$_SESSION['FirstName'] = $FirstName;
		$_SESSION['lastName'] = $lastName;
		$_SESSION['email'] = $email;
		$_SESSION['phoneNumber'] = $phoneNumber;
		$y = '1'; 	
$admincheck='1';
		$_SESSION['userName'] = $_POST['userName'];

$check = '1';

$check2 =$admin;






if($check2==$check){

header("Location:adminpage.php?admin=".$admin);

}

else{

header("Location:user.php");

}

exit();


		
		



	} else {
		// Incorrect password
		echo 'Incorrect username and/or password!';
	}
} else {
	// Incorrect username
	echo 'Incorrect username and/or password!';
}

	$stmt->close();
}




?>