<!DOCTYPE html>
<html lang="en">

  <head>
      <style>

                    .ui-datepicker-calendar {
    display: none;
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
<?php
session_start();

 

?>
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
              <li class="nav-item">
                <a class="nav-link" href="panel.php">Admin Panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pay.php">Payment</a>
              </li>
             
              <li class="nav-item active">
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
            <h1>Your Profile</h1>
            <span>Find your informations here</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Personal Inforations</h4>
               <p>
        Name: <?php

  
  echo $_SESSION['FirstName'];
 

?></p>
 <p>Surname: <?php

  
  echo $_SESSION['lastName'];
 

?></p>
<p>e-mail:<?php

  
  echo $_SESSION['email'];
 

?> </p> 
Phone: 
              <a href="#"><?php

  
  echo $_SESSION['phoneNumber'];
 

?></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Building Informations</h4>
             <p> Building :  <?php

  $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


 $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($stmt = $con->prepare('SELECT flat_id
FROM accounts WHERE username = ?' )) {

$stmt->bind_param('s', $_SESSION['userName']);
  $stmt->execute();
  // Store the result so we can check if the account exists in the database.
  $stmt->store_result();

  
  $stmt->bind_result($flatid);
  $stmt->fetch();

if ($st = $con->prepare('SELECT floor,number
FROM flats WHERE flat_id = ?' )) {

$st->bind_param('s', $flatid);
  $st->execute();
  // Store the result so we can check if the account exists in the database.
  $st->store_result();


$st->bind_result($floor,$number);
  $st->fetch();

  echo "Floor: "; echo $floor; echo " Number: " ;echo$number;


}











}


                             ?>


  


</p>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item" style="margin-top: 0px; width: 300px;">
              <i class=""     ></i>
              <br>
              <img src="logoo.jpg" style="height: 120px;width: 120px; margin-top: -100px">
              <h4>Payment Informations</h4>
                  Loan: 
    <?php

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'apartman';


    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);




    if ($st = $con->prepare('SELECT loan
FROM accounts WHERE username = ?' )) {

        $st->bind_param('s', $_SESSION['name']);
        $st->execute();
        // Store the result so we can check if the account exists in the database.
        $st->store_result();


        $st->bind_result($loan);
        $st->fetch();

        echo $loan;


    }














    ?>
              <br />
                

            
           
            <br />
                    

                <form action="" method="post">

</form>


                <form name="open_file" action="" method='GET'>
      <select name="file" style="width:40%; font-size:20px;">
           <option value="2021" selected="selected" >2021</option>
  <option value="2020">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option> 
      </select>
     



             
      <select name="month" style="width:40%; font-size:20px;">
          
   <option value="1" selected="selected">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>             
  <option value="11">11</option>
  <option value="12">12</option> 
      </select>
      <button type="submit" name="submit">UPLOAD</button>
</form>
<!-- GET YOUR SELECT VALUES USING PHP -->

<?php 

   

?>




                <?php
                
                if(isset($_GET['file'])){
                    $year = $_GET['file'];
                    



                    $month = $_GET['month'];
                    echo "Payments in ";
                       
                    echo $year;
                    echo "-";
                    echo $month;
                    
                    
                    

                    $DATABASE_HOST = 'localhost';
                    $DATABASE_USER = 'root';
                    $DATABASE_PASS = '';
                    $DATABASE_NAME = 'apartman';


                    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



                    
                    


                    


                    // Change this to your connection info.
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

                    $namee = $_SESSION['userName'];

                    $result = mysqli_query($con,"SELECT accounts.FirstName, accounts.lastName, 
payments.amount,payments.theDate FROM accounts inner join payments on accounts.id = payments.account_id where accounts.username = '$namee'  and YEAR(theDate) = '$year' and MONTH(theDate)= '$month' ");

                        




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

                    
                    


                }
                
                       
                   
                
               
                ?>
                <br />



           

     <h2>Payment History:</h2>
        <div class='bborder'  ></div>

              

                




                    <!-- Bootstrap core JavaScript -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Additional Scripts -->
                    <script src="assets/js/custom.js"></script>
                    <script src="assets/js/owl.js"></script>
                    <script src="assets/js/slick.js"></script>
                    <script src="assets/js/accordions.js"></script>

                    <script>
                                                      $(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) {
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
});
                    </script>

                   




                    </div>




</div>
          </div>
        </div>
      </div>
    </div>


    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
--><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.694954538692!2d30.64754391525042!3d36.89764517992868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c391db4c3dc15f%3A0x7258add44e8254a5!2zQWtkZW5peiDDnG5pdmVyc2l0ZXNpIEJpbGdpc2F5YXIgTcO8aGVuZGlzbGnEn2kgQsO2bMO8bcO8!5e0!3m2!1str!2str!4v1609960921447!5m2!1str!2str" width="1700" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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