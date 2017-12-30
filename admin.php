<html>
<head>
<title>Dashboard</title
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
<style>
table,th,td{
	background-color: #eec6e8;
}
</style>
</head>
<body style="background-color:#444040;">
<!--header-->
	<div class="header-w3l">
		<h1>Admin Dashboard</h1>
		<h1 style="color:#000000;"></h1>
	</div>
	 <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="#">HOME</a>
						</li>
						<li  class="test">
							<a href="sale.php">SALES</a>
							
							</li>
							<li class="test2">
							<a href="FarmerProducts?id=0">PRODUCTS</a>
							</ul>
</div>	
<div class="header-w3l">
		<h3 style="color: #ffffff; align-items:left;" >Farmer Details</h3>
		<h3 style="color:#ffffff;"></h3>
	</div>
<div style="width: 100% ; padding:25px; 
text-align: left;">
<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>address</th>
			<th>aadhaar</th>
			<th>DOB</th>
			<th>ph-no</th>
			<th>Land-acres</th>
			<th>Land-status</th>
			<th>status</th>
			
			
		</tr>
	</thead>
	<!-- Table Header -->

	<!-- Table Body -->
	<tbody>
	<?php
require"connection.php";
$res = array();
 $sqlDetail = " SELECT * FROM  tb_farmer ";
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
			<td>$row[5] </td>
		    <td>$row[6] </td>
			<td>$row[7] </td>
			<td>$row[8]</td>
			
			</tr>";

	}
}else{
	echo"Failed".mysqli_error($con);
}
?>
	</table>
	</div>
	