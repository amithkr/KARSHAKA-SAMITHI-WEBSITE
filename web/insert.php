<?php
require"connection.php";
$frm_Name=$_POST["frm_Name"];
$frm_Address=$_POST["frm_Address"];
$frm_Aadhaar=$_POST["frm_Aadhaar"];
$frm_DOB=$_POST["frm_DOB"];
$frm_Phone=$_POST["frm_Number"];
$frm_Landacres=$_POST["frm_Landacres"];
$frm_Landstatus=$_POST["frm_Landstatus"];
$status=$_POST["status"];
$frm_Username=$_POST["frm_Username"];
$frm_Password=$_POST["frm_Password"];
 $sqlDetail = " INSERT INTO tb_farmer( frm_ID, frm_Name, frm_Address,frm_Aadhaar , frm_DOB, frm_Phone , frm_Landacres, frm_Landstatus,status,frm_Username, frm_Password)
				 VALUES ( '', '$frm_Name','$frm_Address','$frm_Aadhaar','$frm_DOB','$frm_Phone','$frm_Landacres','$frm_Landstatus','$status','$frm_Username','$frm_Password')";

if(mysqli_query($con,$sqlDetail)){
	echo "<h3>Data insertion success</h3>";
}else{
	echo"Data insertion error".mysqli_error($con);
}
?>