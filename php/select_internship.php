<?php
$a1=$_POST['search'];

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

$sql = "SELECT * from internship where email='$a1' OR number='$a1' OR reg_id='$a1'";
$result = $conn->query($sql);
$rows = $result->num_rows;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
<input type='hidden' id="new_name" value="<?php  echo $row["name"];?>" >
<input type='hidden' id="new_branch" value="<?php  echo $row["branch"];?>" >
<input type='hidden' id="new_college" value="<?php  echo $row["college"];?>" >
<input type='hidden' id="new_city" value="<?php  echo $row["city"];?>" >
<input type='hidden' id="new_phone" value="<?php  echo $row["number"];?>" >
<input type='hidden' id="new_email" value="<?php  echo $row["email"];?>" >
<input type='hidden' id="new_working_days_from" value="<?php  echo $row["work1"];?>" >
<input type='hidden' id="new_working_days_to" value="<?php  echo $row["work2"];?>" >
<input type='hidden' id="new_date_of_printing" value="<?php  echo $row["date"];?>" >
<input type='hidden' id="new_training_officer" value="<?php  echo $row["training_officer"];?>" >
<input type='hidden' id="new_department_of_work" value="<?php  echo $row["department_of_work"];?>" >
<input type='hidden' id="new_registration_id" value="<?php  echo $row["reg_id"];?>" >	
<input type='hidden' id="new_certificate_category" value="<?php  echo $row["certificate_category"];?>" >
	<?php
	}
} else {
    echo "no";
}
$conn->close();
?>