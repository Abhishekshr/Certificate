<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['old1'];
$b = $_POST['new1'];
$c = $_POST['confirm1'];
$d=$_POST['username'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * from admin where password='$a' and first_name='$d'";
$result = $conn->query($sql);
$rows = $result->num_rows;

if ($result->num_rows > 0)

{						
						if($a==$b)
						{
							echo "This password has already been used please choose some new password!";
						}
						
						else if($b==$c)
						{
								sleep(1);
								$con= mysqli_connect("localhost", "root", "","wt");
								if (mysqli_connect_errno())
								  {
								   die ("Failed to connect to MySQL: " . mysqli_connect_error());
								  } 
								 $roh= mysqli_select_db($con,"wt");
								  //or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 


								$sql= "update admin set password='$b' where password='$a'";

								if(mysqli_query($con,$sql)) {
									
									echo"Your password has been changed.";
								}
								else
								{
									 die('Ooppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
									mysqli_close($con);
								}
						}
						
						else
						{
							echo"Password doesn't match";
						}
}

else
{
	echo "Old password is incorrect!";
}
?>