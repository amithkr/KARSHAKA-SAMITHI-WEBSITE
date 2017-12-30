 	<?php
require"connection.php";
$id = $_POST['id'];
$prize = $_POST['prize'];
$qty = $_POST["qty"];
$r = $prize*$qty;
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST["phone"];


// echo $qty."".$id."".$prize;
// echo $name."".$address."".$phone;

$sqlDetail = " INSERT INTO customer(  cus_Name, cus_Address,cus_Phone)
				 VALUES (  '$name','$address','$phone')";

if(mysqli_query($con,$sqlDetail)){
	$d = mysqli_query( $con, "SELECT LAST_INSERT_ID()");
	// mysqli_next_result($d); 

	// mysqli_fetch($d); 
	$row = mysqli_fetch_row($d);
	$x =  $row[0]; 
	$sqlDetails = " INSERT INTO sales( sal_cus_ID, sal_prm_ID,sal_prd_Prize,Status,sal_Quantity)
	 VALUES (  '$x','$id','$r','Y','$qty')";
	$ds = mysqli_query($con,$sqlDetails);
	if ($ds) {
		echo "Your booking is successfull click below to continue shopping";
		echo"<br/><a href='home.php'>Shop Again</a>";
	}
	else{
		echo  "Data insertion error".mysqli_error($con);
		return;
	}
}else{
	echo  "Data insertion error".mysqli_error($con);
}


?>