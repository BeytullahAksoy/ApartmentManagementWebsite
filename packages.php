<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,180,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>house.com | Apartment Management</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
               <li><a href="#"><i class="fa fa-envelope"></i>beytullahaksoy@gmail.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>111111111</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
         <a class="navbar-brand" href="adminpage.php"><h2>Apartment Management <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="adminpage.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="packages.php">Admin Panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Payment</a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Admin Panel</h1>
           
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-1-720x480.jpg" alt="">
              <div class="down-content">
                


<p> List of loans collected from members in last month</p>

<?php

 $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT accounts.FirstName, accounts.lastName , paids.amount ,paids.theDate
FROM accounts
INNER JOIN paids ON accounts.id = paids.account_id  where
  paids.theDate >= DATE_ADD(LAST_DAY(DATE_SUB(NOW(), INTERVAL 2 MONTH)), INTERVAL 1 DAY) 
  /* Smaller or equal than one month ago */

");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Amount</th>
<th>Date</th> 
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['lastName'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['theDate'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<p> Total income  in last month : </p><?php

  $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

  if ($stmt = $con->prepare('SELECT SUM(amount)
FROM paids  where
  paids.theDate >= DATE_ADD(LAST_DAY(DATE_SUB(NOW(), INTERVAL 2 MONTH)), INTERVAL 1 DAY) 
')) {
$stmt->execute();
  $stmt->store_result();
    $stmt->bind_result($totalAmount);

    $stmt->fetch();



  // Store the result so we can check if the account exists in the database.


echo $totalAmount;



  }
 

?>






              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-2-720x480.jpg" alt="">
              <div class="down-content">
             

<h3>Members who has loans and amounts</h3 >

             <?php 




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT FirstName , lastName, loan FROM accounts where loan >0");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Loan</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['lastName'] . "</td>";
echo "<td>" . $row['loan'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);



?>.





              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-3-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Add rate</h4>
                
  <form action="rate.php." method="post" >
 <p>Rate: <input type="text" name="rate" /></p>

 <p><input type="submit" name = "Define Rate" style="" /></p>
</form>

              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-4-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Add loan</h4>
               <form action="addLoan.php" method="post" >
 Expense: <br/><br>
 <input type="text" name="masraf" style="width: 180px" /><br/>


 <br>
 <input type="submit" value="Add " />
</form>








              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-5-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Delete Member</h4>
               
<form  method="post" name="taskOption" style="text: #3CBC8D; " action="deleteMember.php" >
  Member:
  <select name="selected" >
    <option disabled selected  ">-- Select Member --</option>
    <?php
        include "getMember.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT userName From accounts where flat_id !=0");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['userName'] ."'>" .$data['userName'] ."</option>";  // displaying data in option menu
        } 
    ?>  
  </select>
<br>
<br>
<input type="submit" name="submit" value="Delete"> 

</form>

<?php mysqli_close($db);  // close connection ?>
              </div>
            </div>

            <br>
          </div>




 <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-6-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Add Announcement</h4>
               <form action="announcement.php" method="post"  >
   
Text: <textarea name="textt" style="width: 270px" />


 </textarea>


 <input type="submit" value="Submit Announcement" />



</form>

              </div>
            </div>

            <br>
          </div>






        </div>

        <br>
        <br>

 <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-7-720x480.jpg" alt="">
              <div class="down-content">


<input type="button" name="answer" value="Add Member" onclick="showDiv()" />

<script type="text/javascript">
  
  function showDiv() {
   document.getElementById('addDiv').style.display = "block";
}
</script>

           

                <div id = "addDiv" style="display:none;">
               <form action="addMember.php" method="post"  >
   
User Name: <input type="text" name="userName-r" style="width :180px" />
<p></p>

Password: <input type="text" name="password-r"  style="width :180px" />
<p></p>
 email: <input type="text" name="email-r"" style="width :180px"/>
<p></p>
 Phone : <input type="text" name="phone-r" style="width :180px" />
<p></p>
 Admin: <input type="text" name="admin-r" style="width :180px" />

<p></p>
 Floor: <input type="text" name="floor-r" style="width :180px" />
 <p></p>
 Number :<input type="text" name="number-r" style="width :180px"/>
 <p></p>
 First Name :<input type="text" name="firstName-r"  style="width :180px"/>
  <p></p>
  Last Name :<input type="text" name="lastName-r" style="width :180px"/>


 <input type="submit" value="Create Member" />
</form>
</div>
              </div>
            </div>

            <br>
          </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

 
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <p>
                CSE Apartment Management
                
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

   

  </body>
</html>