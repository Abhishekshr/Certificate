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

$sql = "SELECT * from salary where email='$a1' OR number='$a1' OR reg_id='$a1'";
$result = $conn->query($sql);
$rows = $result->num_rows;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
<input type='hidden' id="new_name" value="<?php  echo $row["name"];?>" >
<input type='hidden' id="new_phone" value="<?php  echo $row["number"];?>" >
<input type='hidden' id="new_f_name" value="<?php  echo $row["f_name"];?>" >
<input type='hidden' id="new_job_title" value="<?php  echo $row["job_title"];?>" >
<input type='hidden' id="new_date1" value="<?php  echo $row["date1"];?>" >
<input type='hidden' id="new_email" value="<?php  echo $row["email"];?>" >
<input type='hidden' id="new_net_pay" value="<?php  echo $row["net_pay"];?>" >
<input type='hidden' id="new_gross_salary" value="<?php  echo $row["gross_salary"];?>" >
<input type='hidden' id="new_date_of_printing" value="<?php  echo $row["date_of_printing"];?>" >
<input type='hidden' id="new_reg_id" value="<?php  echo $row["reg_id"];?>" >
	
<input type='hidden' id="new_certificate_category" value="<?php  echo $row["certificate_category"];?>" >
	<?php
	}
} else {
    echo "no";
}
$conn->close();
?>