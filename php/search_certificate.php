<?php
$a1=$_POST['name'];
$a2=$_POST['email'];
$a3=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";



?>
<table class="table">
	   <tr >
	   <th colspan=2>Certificate Name</th>
	   </tr>
	   
	   
	   
<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from certificate where name='$a1' AND email='$a2' AND number='$a3'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

		?>
		
		 <tr>
		 
	   <td><input id='certificate_category1' disabled type=text style="background:transparent; border:none; border-color:transparent; color:white; background-color:rgba(70,70,70,0.0);" value='<?php  echo $row1["certificate_category"];?>'></td>
	   <td><a target="_blank" href="appointment_certificate.php?id=<?php echo $row1['email']; ?>">
	   <button type="button" class="btn btn-default btn-sm" id='b1' style="background-color:#88C9C9; position:relative; right:-120px;" >Generate</button></td></a>
	   </tr>
		
		
		<?php
	}
}
 else {
    ?>
	<input type="hidden" id="no1" value="no1">
	<?php
	
}
$conn->close();

}
?>




<?php
$a1=$_POST['name'];
$a2=$_POST['email'];
$a3=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from agreement where name='$a1' AND email='$a2' AND number='$a3'";



$result1 = $conn->query($sql1);



if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

		?>
		 <tr>
	   <td><input id='certificate_category2' disabled type=text style="background:transparent; border:none; border-color:transparent; color:white; background-color:rgba(70,70,70,0.0);" value='<?php  echo $row1["certificate_category"];?>'></td>
	   <td>
	   <a target="_blank" href="agreement_certificate.php?id=<?php echo $row1['email']; ?>">
	   <button type="button" class="btn btn-default btn-sm" id='b2' style="background-color:#88C9C9; position:relative; right:-120px;">Generate</button>
	   </a></td>
	   </tr>
<?php
	}
	
	
}
 else {
	 ?>
    <input type="hidden" id="no2" value="no1">
	<?php
}
}
$conn->close();

?>



<?php
$a1=$_POST['name'];
$a2=$_POST['email'];
$a3=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from salary where name='$a1' AND email='$a2' AND number='$a3'";



$result1 = $conn->query($sql1);	



if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

	?>
	 <tr>
	   <td><input id='certificate_category3' disabled type=text style="background:transparent; border:none; border-color:transparent; color:white; background-color:rgba(70,70,70,0.0);" value='<?php  echo $row1["certificate_category"];?>'></td>
	   <td><a target="_blank" href="salary_certificate.php?id=<?php echo $row1['email']; ?>"><button type="button" class="btn btn-default btn-sm" id='b3' style="background-color:#88C9C9; position:relative; right:-120px;" >Generate</button></a></td>
	   </tr>
<?php
	}
	
}
 else {
	 ?>
<input type="hidden" id="no3" value="no1">
<?php

   }
?>

	
	<?php
$conn->close();

}
?>

<?php
$a1=$_POST['name'];
$a2=$_POST['email'];
$a3=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from internship where name='$a1' AND email='$a2' AND number='$a3'";



$result1 = $conn->query($sql1);



if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

	?>
	 <tr>
	   <td><input id='certificate_category4' disabled type=text style="background:transparent; border:none; border-color:transparent; color:white; background-color:rgba(70,70,70,0.0);" value='<?php  echo $row1["certificate_category"];?>'></td>
	   <td><a target="_blank"  href="internship_certificate.php?id=<?php echo $row1['email']; ?>"><button type="button" class="btn btn-default btn-sm" id='b4' style="background-color:#88C9C9; position:relative; right:-120px;" >Generate</button></a></td>
	   </tr>
<?php
	}
	
}
 else {
	 ?>
<input type="hidden" id="no4" value="no1">
<?php

   }
?>

	
	<?php
$conn->close();

}
?>

<?php
$a1=$_POST['name'];
$a2=$_POST['email'];
$a3=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from relieving where name='$a1' AND email='$a2' AND number='$a3'";



$result1 = $conn->query($sql1);



if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

	?>
	 <tr>
	   <td><input id='certificate_category5' disabled type=text style="background:transparent; border:none; border-color:transparent; color:white; background-color:rgba(70,70,70,0.0);" value='<?php  echo $row1["certificate_category"];?>'></td>
	   <td><a target="_blank" href="relieving_certificate.php?id=<?php echo $row1['email']; ?>"><button type="button" class="btn btn-default btn-sm" id='b5' style="background-color:#88C9C9; position:relative; right:-120px;" >Generate</button></a></td>
	   </tr>
<?php
	}
	
}
 else {
	 ?>
<input type="hidden" id="no5" value="no1">
<?php

   }
?>

	<?php
$conn->close();

}
?>

<?php
$a1=$_POST['name'];
$a2=$_POST['email'];
$a3=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
	
{
	
$sql1 = "SELECT * from experience where name='$a1' AND email='$a2' AND number='$a3'";



$result1 = $conn->query($sql1);



if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {

	?>
	 <tr>
	   <td><input id='certificate_category6' disabled type=text style="background:transparent; border:none; border-color:transparent; color:white; background-color:rgba(70,70,70,0.0);" value='<?php  echo $row1["certificate_category"];?>'></td>
	   <td><a target="_blank"  href="experience_certificate.php?id=<?php echo $row1['email']; ?>"><button type="button" class="btn btn-default btn-sm" id='b6' style="background-color:#88C9C9; position:relative; right:-120px;" >Generate</button></a></td>
	   </tr>
<?php
	}
	
}
 else {
	 ?>
<input type="hidden" id="no6" value="no1">
<?php

   }
?>

	</table>
	<?php
$conn->close();

}
?>