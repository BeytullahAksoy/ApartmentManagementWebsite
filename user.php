<?php
$hash = password_hash("test",  
          PASSWORD_DEFAULT);

echo $hash;		  
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
 
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>House.com</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Home</a></li>
            <li><a href="isPaid-r.php"><i class="fa fa-bar-chart fa-fw"></i>Dues</a></li>
            
            
            
           
            <li><a href="index.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Home </a></li>
				<li><a href="announcements-r.php">Announcements</a></li>
                <li><a href="profile-r.php">Profile</a></li>
                
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            
          

<b>
<b>
<div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">   <?php
session_start();
// Change this to your connection info.
                                                  $DATABASE_HOST = 'localhost';
                                                  $DATABASE_USER = 'root';
                                                  $DATABASE_PASS = '';
                                                  $DATABASE_NAME = 'apartment';

                                                  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


                                                  if ($stmt = $con->prepare('SELECT userName FROM users WHERE userID = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_SESSION['userID']);

   
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($adminName);
	$stmt->fetch();



    echo  $adminName;
    }
	


                                                  }


?>  , Welcome to our website</p></h2>
                     
                  </div>        
                </div>                
              </div>      


 <div class="templatemo-content-widget white-bg col-2" style="width:250px;float:left;height:190px">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h4 class="templatemo-inline-block">Total Income In This Month</h2><hr>
              <p>
			  
			  <?php
			  
			  
			  

                                                  $DATABASE_HOST = 'localhost';
                                                  $DATABASE_USER = 'root';
                                                  $DATABASE_PASS = '';
                                                  $DATABASE_NAME = 'apartment';

                                                  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$month = date('m');
                                                  if ($stmt = $con->prepare("SELECT sum(amount) from payments  WHERE MONTH(date) = '$month' ")) {

	

   
	$stmt->execute();
	
	$stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($adminName);
	$stmt->fetch();



    echo  $adminName;
    }
												  }
			  
			  
			  ?>$
			  
			  
			  </p>
            </div>		





 <div class="templatemo-content-widget orange-bg col-2" style="width:250px;float:left;height:190px">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h4 class="templatemo-inline-block">Total Outcome In This Month</h2><hr>
              <p>
			  
			  <?php
			  
			  
			  

                                                  $DATABASE_HOST = 'localhost';
                                                  $DATABASE_USER = 'root';
                                                  $DATABASE_PASS = '';
                                                  $DATABASE_NAME = 'apartment';

                                                  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$month = date('m');
                                                  if ($stmt = $con->prepare("SELECT sum(amount) from outgoing  WHERE MONTH(date) = '$month' ")) {

	

   
	$stmt->execute();
	
	$stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($adminName);
	$stmt->fetch();



    echo  $adminName;
    }
												  }
			  
			  
			  ?>$
			  
			  
			  </p>
            </div>	


 <div class="templatemo-content-widget blue-bg col-2" style="width:250px;float:left;height:190px">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h4 class="templatemo-inline-block">Total Expecting Amounts </h2><hr>
              <p>
			  
			  <?php
			  
			  
			  

                                                  $DATABASE_HOST = 'localhost';
                                                  $DATABASE_USER = 'root';
                                                  $DATABASE_PASS = '';
                                                  $DATABASE_NAME = 'apartment';

                                                  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$month = date('m');
                                                  if ($stmt = $con->prepare("SELECT sum(amount) from dues  ")) {

	

   
	$stmt->execute();
	
	$stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($adminName);
	$stmt->fetch();



    echo  $adminName;
    }
												  }
			  
			  
			  ?>$
			  
			  
			  </p>
            </div>	
			
			<div class="templatemo-content-widget blue-bg col-2" style="width:250px;float:left;height:190px">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h4 class="templatemo-inline-block">Money In Box Is</h2><hr>
              <p>
			  
			  <?php
			  
			  
			  

                                                  $DATABASE_HOST = 'localhost';
                                                  $DATABASE_USER = 'root';
                                                  $DATABASE_PASS = '';
                                                  $DATABASE_NAME = 'apartment';

                                                  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$month = date('m');
                                                  if ($stmt = $con->prepare("SELECT amount from cashbox  ")) {

	

   
	$stmt->execute();
	
	$stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($adminName);
	$stmt->fetch();



    echo  $adminName;
    }
												  }
			  
			  
			  ?>$
			  
			  
			  </p>
            </div>	












			
                          
            </div>
                    
          </div> <!-- Second row ends -->
           
          </div>
         
         
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      $(document).ready(function(){
        if($.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          $(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          $(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>