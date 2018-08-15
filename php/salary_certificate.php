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
	
$sql1 = "SELECT * from salary where email='$a1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Salary Certificate</title>
  <meta charset="utf-8">
  <link rel='shortcut icon' href='wt.png'>
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
  <center><h4 style="color:#008081;"><b><b>WT SOLUTIONS (P) Ltd</b></b></h4>
  <h7><b><i style="color:#FDA400;">Ensure success on web</i></b></h7></center>
  </header><br><br><br>
  <tr>
  <table style="width:100%;">
  <tr>
  <td style="text-align:right"><strong>Date: 
  <?php
  echo $row1['date_of_printing'];
  ?>
  </strong></td>
  </tr>
  </table>

  <br><br><br><br><br>
  <center><h3><b>SALARY CERTIFICATE</b></h3></center>
  <br><br>
  <p><h5>This is to certify that
  <b> <?php
  echo $row1['name'];
  ?></b>
  son/daughter of <b>Mr.
  <?php
  echo $row1['f_name'];
  ?>
  </b>,
  working in our organisation<b> WT IT Solutions(P) Ltd</b>. As a Public Relation Manager since 
  <?php
  echo $row1['date_of_joining'];
  ?>
  , his drawing salary as mentioned below:
  <br><br><br><br>
  <b>GROSS SALARY:
  <?php
  echo $row1['gross_salary'];
  ?>
  </b>
  <br><br>
  <b>NET PAY:
  <?php
  echo $row1['net_pay'];
}
  ?>
  </b></h5>
  </p>
  <br><br><br>
  <h6> Regards,<br><br>
  Akash Sharma<br><br>
  Director<br><br>
  +917055333321</h6>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  
  
  <br>
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
  
  