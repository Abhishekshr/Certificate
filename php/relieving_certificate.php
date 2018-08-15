<?php
$a1=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from relieving where email='$a1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Relieving</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="wt.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .content{
  border-style:solid;
  border-width:1px;
  border-color:grey;
  padding:7%;
  margin-left:4%;
  margin-right:4%;
  text-align:justify;
  
  
  }
  </style>

  </head>
  <body>
  <div class="content">
  <br>
  <header>
   <div align="right" >
    <img src=" PartnerBadge.jpg" style=" height: 50px; width: 170px" class="img-fluid">
    </div><br>
  
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7>
  
  
  
  </header><br><br><br>
  <br><br><br><br>
  <p><h5>To,</p>
  <b>
  <?php
  echo $row1['name'];
  ?>
  </b><br>
  Subject:Relieving Order
  <br><br><br><br>
  This is to acknowledge the receipt of your registration letter dated <br>
  <b>
  <?php
  echo $row1['date_of_printing'];
  ?>
  </b>.
  <br>
  While accepting the same, we thank you very much for the close association you had<br>
  with us during the tenure from <b>
  <?php
  echo $row1['time_period_from'];
  ?>
  </b> to <b>
  <?php
  echo $row1['time_period_to'];
  ?>
  </b>.
  <br>
  You have been relieved from your service with effect from the the closing working hours<br>
  of <b>
  
  <?php
  echo $row1['date_of_printing'];
  ?>
  
  </b>.
  <br>
  We wish you all the best in your future career.
  </h5>
  </p>
  <br><br><br>
  <h6>
<div>
<p>Warm Regards,</p>
<p>WT IT Solutions (Pvt) Ltd</p>
<p>Date:</p>
<p><b>
<?php
  echo $row1['date_of_printing'];
  ?>
<b></p>
</div>
<br>
<p style="text-align:right; color:#A19EA1";>Mr Ankit Sharma</p>
<p style="text-align:right; color:#A19EA1";>HR Manager</p>

  <br><br><br><br><br><br>
  <br><br><br><br><br><br>
  
  
  
   <footer>
  <center><h7><b>WT IT Solutions Pvt. Ltd<br>
  (An ISO 9001:2008 Certified Company)<br>
  Office:158/7/2 Officers Enclave, Rajpur Road<br>
  Near Pacific Mall, Dehradun, Uttarakhand<br>
  Tel:+917055333321<br>
  Email:info@wtsolutions.cc<br>
  www.wtsolutions.cc</b></h7></center>
  </footer>
  </div>
  </body>
  </html>
  <?php
}
?>
  