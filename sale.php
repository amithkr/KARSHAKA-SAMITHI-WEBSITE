<html>
<head>
<title>sales</title
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>

</head>
<body style="background-color:#ffffff">
<!--header-->
	<div class="header-w3l">
		<h1>Admin Dashboard</h1>
		<h1 style="color:#000000;"></h1>
	</div>
	<div style="width: 70%  ">
<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
	<thead>
		<tr>
			<th>customer-name</th>
			<th>product-id</th>
			<th>product-name</th>
			<th>product-quantity</th>
			<th>product-prize</th>
			<th>total</th>
			<!--<th>Land-acres</th>
			<th>Land-status</th>
			<th>farmer-account</th>-->
			
		</tr>
	</thead>
	<tbody>
	<?php
require"connection.php";
$res = array();
 $sqlDetail = "  SELECT cus_Name, prm_ID, prm_Name, sal_Quantity,sal_prd_Prize FROM sales A 
 INNER JOIN tb_pdtmaster B on B.prm_ID  = A.sal_prm_ID
INNER JOIN customer C on C.cus_ID  = A.sal_cus_ID
group By sal_ID
order By sal_ID";
$result = mysqli_query($con,$sqlDetail);
if($result){

	$f = mysqli_num_rows($result);
	for ($i=0; $i < $f ; $i++) { 
		$row = mysqli_fetch_row($result);
		if ($i % 2 == 0) {
			echo "<tr class = 'even'>";
		}
		else{
				echo "<tr>";
		}
		echo "<td>$row[0] </td>
			<td>$row[1] </td>
			<td>$row[2] </td>
			<td>$row[3] </td>
			<td>$row[4] </td>
			</tr>";

	}
}else{
	echo"Failed".mysqli_error($con);
}
?>
	</table>
	</div>
	