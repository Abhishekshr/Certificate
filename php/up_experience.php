<?php
// Here we get all the information from the fields sent over by the form.
$search=$_POST['search'];
$a = $_POST['name'];
$k= $_POST['phone'];
$b = $_POST['position_of_responsibility'];
$c = $_POST['start'];
$d = $_POST['end'];
$e = $_POST['duration'];
$f = $_POST['salary'];
$g = $_POST['date_of_printing'];
$h = $_POST['certificate_category'];
$i= $_POST['email'];
$j= $_POST['reg_id'];


?>
<?php
sleep(1);
$con= mysqli_connect("localhost", "root", "","wt");
if (mysqli_connect_errno())
  {
   die ("Failed to connect to MySQL: " . mysqli_connect_error());
  } 
 $roh= mysqli_select_db($con,"wt");
  //or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 


$sql= "update experience set name='$a',number='$k',position_of_responsibility='$b',time_period_from='$c',time_period_to='$d',duration='$e'
,salary='$f',date_of_printing='$g',certificate_category='$h',email='$i',reg_id='$j' where email='$search' OR reg_id='$search' OR number='$search'";

if(mysqli_query($con,$sql)) {
	echo "successful";
}
else
{
 die('Ooppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
}
echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";


mysqli_close($con);



?>