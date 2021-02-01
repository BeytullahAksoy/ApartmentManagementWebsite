<?php


session_start();


?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <style>


           .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .red{ background: #ff0000; }
    .green{ background: #00ff00; }
    .blue{ background: #0000ff; }
    .choose{background: #ffffff;}
      </style>
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
         <div style="margin-left:-1300px">
             <form action="loan.php" method="post">
                 <input type="submit" name="someAction" value="Add Loan"  style="width:200px"/>
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
          
       

        <br>
        <br>

 
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