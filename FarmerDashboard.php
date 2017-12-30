
<!DOCTYPE html>
<html>
<head>
<title>Farmer Dashboard</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>

</head>
<body style="background-color:#444040">
<!--header-->
	<div class="header-w3l">
		<h1>Farmer Dashboard</h1>
	</div>
	<div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="#">HOME</a>
						</li>
						<li  class="test">
							<?php '<a href="booking.php">BOOKING DETAILS</a>'?>		
							</li>
							<li class="test2">
							<a href="ProductMaster.html">PRODUCT UPDATION</a>
							</li>
														<li class="test2">
								<?php
						require"connection.php";
						$res = array();

						 $v=$_GET['id'];
						 echo "<a href='FarmerProducts.html?id=$v'>My Products</a>";
						 ?>
							</li>

							</ul>
							
</div>	

<!--//header-->

<div style="width: 100%  ">
<table cellspacing='0' "> <!-- cellspacing='0' is important, must stay -->

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

 $v=$_GET['id'];

 $sqlDetail = " SELECT * FROM  tb_farmer WHERE  frm_ID='$v'";
$result = mysqli_query($con,$sqlDetail);
if($result){
$f = mysqli_num_rows($result);
 
		$row = mysqli_fetch_row($result);

		
				echo "<tr>";
		
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
else{
	echo"Failed".mysqli_error($con);
}
?>

	</tbody>
	<!-- Table Body -->

</table>
<!--main-->
</div>
<!--<div style="width: 100%;padding:25px;  ">-->
<!--<table cellspacing='0' > <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
<!--	<thead>
		<tr>
		
			<th>Product Name</th>
			<th>
			
		</tr>
	</thead>
	<!-- Table Header -->

	<!-- Table Body -->
<!--	<tbody>
//<?php
//require"connection.php";
//$res = array();
// $var=$_GET['id'];
// $sqlDetail = " SELECT * FROM  tb_pdtmaster A 
 //			Inner Join tb_farmer B on B.frm_ID = A.prm_frm_ID
 //WHERE prm_frm_ID='$var' and status = 'Y' ";
//$result = mysqli_query($con,$sqlDetail);
//if($result){

	//$f = mysqli_num_rows($result);
	//for ($i=0; $i < $f ; $i++) { 
		//$row = mysqli_fetch_row($result);
		//if ($i % 2 == 0) {
			//echo "<tr class = 'even'>";
		//}
		//else{
			//	echo "<tr>";
		//}
		//echo "<td>$row[1] </td>
			
	//	</tr>";

	//}
//}else{
	//echo"Failed".mysqli_error($con);
//}
//?>
	</tbody>
	<!-- Table Body -->

<!--</table>
</div>-->
<!--footer-->
<div class="footer-w3">
	<!-- <p>&copy; 2016 Flat Sign Up Form . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
</div>
<!--//footer-->

</body>
</html>



