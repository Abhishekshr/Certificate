<?php
// Here we get all the information from the fields sent over by the form.
$search=$_POST['search'];
$a = $_POST['name'];
$b = $_POST['branch'];
$c = $_POST['college'];
$d = $_POST['city'];
$e = $_POST['email'];
$f = $_POST['phone'];
$g = $_POST['working_days_from'];
$m = $_POST['working_days_to'];
$h = $_POST['training_officer'];
$i = $_POST['department_of_work'];
$j = $_POST['certificate_category'];
$k= $_POST['date_of_printing'];
$l= $_POST['registration_id'];
?>
<?php
sleep(1);
$con= mysqli_connect("localhost", "root", "","wt");
 //or die("Unable to connect to the database server!"); 
 if (mysqli_connect_errno())
  {
   die ("Failed to connect to MySQL: " . mysqli_connect_error());
  }
 $roh= mysqli_select_db($con,"wt");
  //or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 


$sql= "update internship set name='$a',branch='$b',college='$c',city='$d',email='$e',number='$f',work1='$g',work2='$m',training_officer='$h',department_of_work='$i'
,reg_id='$l',date='$k',certificate_category='$j' where email='$search' OR reg_id='$search' OR number='$search'";

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




