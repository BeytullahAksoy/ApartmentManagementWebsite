<?php
session_start();
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
          <h1>Visual Admin</h1>
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
            <li><a href="user.php" ><i class="fa fa-home fa-fw"></i>Home</a></li>
            <li><a href="due-r.php" class="active"><i class="fa fa-bar-chart fa-fw"></i>Dues</a></li>
            
            
            
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
                
                <li><a href="isPaid-r.php"class="active">Previous Payments</a></li>
                <li><a href="notPaid-r.php">Current Payments</a></li>
                
              </ul>   
            </nav> 
          </div>
        </div>
        
		
		
		
		
			
				
				
				
				
				
				
				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="jquery.dataTables.min.js"></script>
				<script src="dataTables.bootstrap.min.js"></script>
				<script></script>
				
				
				
				
				
				
				


	
				
				 <?php  
 
 $connect = mysqli_connect("localhost","root","","apartment");  
 
 $user = $_SESSION['userID'];
 
 $query ="select * from payments where userID = '$user' ";  
 
 $result = mysqli_query($connect, $query);  
 ?>  
				
				
				   <br /><br />  
           <div class="container">  
                 <div class="dropdown" style="width:200px">
                <form name="open_file" action="" method='GET'>
      <select class="btn btn-secondary dropdown-toggle" name="file" style="width:40%; font-size:20px;margin-left:500px ;float:left">
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
     
 <select  class="btn btn-secondary dropdown-toggle" name="month" style="width:40%; font-size:20px;margin-left:500px;float:left">
          
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
      <button  style = "margin-left:500px"class="btn btn-primary" type="submit" name="submit">UPLOAD</button>
</form>
              </div>
                <?php
                
                if(isset($_GET['file'])){
                    $year = $_GET['file'];
                    



                    $month = $_GET['month'];
                    echo "<h2 class='text-justify'>Payments in $year-$month term</h2> ";
                       
                   
                    
                    

                    $DATABASE_HOST = 'localhost';
                    $DATABASE_USER = 'root';
                    $DATABASE_PASS = '';
                    $DATABASE_NAME = 'apartment';


                    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



                    
                    


                    


                    // Change this to your connection info.
                    $DATABASE_HOST = 'localhost';
                    $DATABASE_USER = 'root';
                    $DATABASE_PASS = '';
                    $DATABASE_NAME = 'apartment';




                    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                  

                    $result = mysqli_query($con,"SELECT users.userName, 
payments.amount,payments.date FROM users inner join payments on users.userID = payments.userID where   YEAR(date) = '$year' and MONTH(date)= '$month' and
 users.userID = '$user' ");

                        




                    echo "<table border='1'  class='table table-striped'  >
<tr>
<th scope='col'>User Name</th>
<th>Amount</th>
<th>Date</th>

</tr>";

                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['userName'] . "</td>";
                        echo "<td>" . $row['amount'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        
                        echo "</tr>";
                    }
                    echo "</table>";

                    mysqli_close($con);

                    
                    


                }
                
                       
                   
                
               
                ?>
			  
			  
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