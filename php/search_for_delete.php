<?php


$form=$_POST['search']; 
include('connection.php');
 $sql="select * from certificate where email='$form' or number='$form' or reg_id='$form'  LIMIT 1 ";
 

$result = mysqli_query($conn, $sql) ;
$rowcount=mysqli_num_rows($result);


   if($rowcount!=0)
   {
    	# code...
    	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    	?>
    	<input type="hidden" id="new_name" value="<?php echo $row['name'];?>">
    	<input type="hidden" id="new_address" value="<?php echo $row['address'];?>">
    	<input type="hidden" id="new_email" value="<?php echo $row['email'];?>">
    	<input type="hidden" id="new_phone" value="<?php echo $row['number'];?>">
    	<input type="hidden" id="new_jt" value="<?php echo $row['job_title'];?>">
        <input type="hidden" id="new_pp" value="<?php echo $row['place_of_posting'];?>">
    	<input type="hidden" id="new_regid" value="<?php echo $row['reg_id'];?>">
    	
    
    		
    	<?php
    
    mysqli_close($conn);
}
else 
echo "no";
 ?>