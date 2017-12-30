<?php
require"connection.php";
$Name=$_POST["frm_Username"];
$Pass=$_POST["frm_Password"];
$sqlDetail = " SELECT frm_ID user_Name,Password FROM  user
				 where user_Name = '$Name' and Password = '$Pass' ";
$result = mysqli_query($con,$sqlDetail);
if($result){
	$row = mysqli_fetch_row($result);
	$d =  $row[0];
	if ($d == 0) {
		 header("Location: admin.php?id=".$d);
	}
	else{
		header("Location: FarmerDashboard.php?id=".$d);
	}
	echo $d;
}else{
	echo"Failed".mysqli_error($con);
}
?>