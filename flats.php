


<?php
session_start();
  
 
 

?> 

<!DOCTYPE html>
<html lang="en">

  <head>
<style type="text/css">
  
.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #3e3e3e;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4d4d4f;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #ea1d6f;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: #ea1d6f;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
                <a class="nav-link" href="panel.php">Admin Panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pay.php">Payment</a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Profile</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Sign Out</a>
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
              <div style="margin-left:-1300px">
                  <form action="loan.php" method="post">
                      <input type="submit" name="someAction" value="Add Loan" style="width:200px" />
                  </form>
                  <form action="delete.php" method="post">
                      <input type="submit" name="someAction" value="Delete Member" style="width:200px" />
                  </form>
                  <form action="add.php" method="post">
                      <input type="submit" name="someAction" value="Add Member" style="width:200px" />
                  </form>
                  <form action="announce.php" method="post">
                      <input type="submit" name="someAction" value="Announce" style="width:200px" />
                  </form>
                  <form action="flats.php" method="post">
                      <input type="submit" name="someAction" value="Flats" style="width:200px" />
                  </form>
                  <form action="leftPeople.php" method="post">
                      <input type="submit" name="someAction" value="Left People" style="width:200px" />
                  </form>
                  <form action="collecting.php" method="post">
                      <input type="submit" name="someAction" value="Collections" style="width:200px" />
                  </form>
                  <form action="hasLoan.php" method="post">
                      <input type="submit" name="someAction" value="People Has Loan" style="width:200px" />
                  </form>
              </div>
           
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
          <div class="background">
 


            <div class="dört box" style="margin-left:350px;margin-top:-80px">
                  <div class="col-md-4">
            
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

                      $result = mysqli_query($con,"SELECT flats.flat_id, flats.rooms , flats.price  ,flats.floor , flats.number,accounts.FirstName,accounts.lastName
FROM flats left JOIN accounts
ON accounts.flat_id = flats.flat_id;



");

                      echo "<table border='1'>
<tr>
<th>Floor</th>
<th>Number</th>
<th>Rooms</th>
<th>Price</th>

<th>First Name</th>
<th>Last Name</th>
</tr>";

                      while($row = mysqli_fetch_array($result))
                      {
                          echo "<tr>";
                          echo "<td>" . $row['floor'] . "</td>";
                          echo "<td>" . $row['number'] . "</td>";
                          echo "<td>" . $row['rooms'] . "</td>";
                          echo "<td>" . $row['price'] . "</td>";
                          
                          echo "<td>" . $row['FirstName'] . "</td>";
                          echo "<td>" . $row['lastName'] . "</td>";
                          echo "</tr>";
                      }
                      echo "</table>";

                      mysqli_close($con);
                      ?>  

            <br>
          </div>

          </div>
</div>

          </div>

       
        </div>
      </div>
    </div>

    <br>  
    <br>  
    <br>  
    <br>  

  
    
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

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>