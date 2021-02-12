

<?php
session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartment';
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
if ($stmt = $con->prepare('SELECT adminID,password,adminName FROM admin WHERE adminName = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['userName']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

if ($stmt->num_rows > 0) {
	$stmt->bind_result( $adminID,$password,$adminName);
	$stmt->fetch();
	





session_regenerate_id();

$_SESSION['adminID'] = $adminID;
$_SESSION['adminName'] = $adminName;

	
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.



$_SESSION['pass'] =$_POST['Password'];


if($_POST['Password']==$password){


header('Location: admin.php');

		



	} 
} else {
	

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT userID,password,userName FROM users WHERE userName = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['userName']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

if ($stmt->num_rows > 0) {
	$stmt->bind_result( $userID,$password,$userName);
	$stmt->fetch();
	





session_regenerate_id();

$_SESSION['userID'] = $userID;
$_SESSION['userName'] = $userName;

	
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.



echo $_SESSION['pass'];


if($verify){


header('Location: user.php');

		



	} 
} else {
	// Incorrect username
	echo 'user	Incorrect username and/or password!';
	echo $_SESSION['userID'] ;
	echo $_POST['userName'];
}

	$stmt->close();
	


}

}

	


}





















?>