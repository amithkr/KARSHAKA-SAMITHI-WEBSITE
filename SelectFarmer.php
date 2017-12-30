	<?php
require"connection.php";
$res = array();
 $sqlDetail = " SELECT * FROM  tb_farmer WHERE Status = 'Y' ";
$result = mysqli_query($con,$sqlDetail);
if($result){

 

   while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC))  
    {
               //echo $row['frm_Name'];
               echo "<tr>";
               	echo "<td>$row['frm_Name'] </td>
			<td>$row['frm_Name']</td>
			<td>$row['frm_Name'] </td>
		</tr>";
    }

    for ($i=0; $i < count($row) ; $i++) { 
    	echo $row['frm_Name'];
    }
		// foreach($rows as $row)
		// {
		// echo $row['frm_Name'];
		// }
    // $row = mysqli_fetch_array( $result, MYSQLI_ASSOC);
    // // for ($i=0; $i < count($row); $i++) { 
    // 	//echo json_encode(array("result"=>$row[$i]));
    // 	echo $row[0];
    // }
	// $f = mysqli_num_rows($result);
	// for ($i=0; $i <= count($f) ; $i++) { 
	// 	if ($i % 2 == 0) {
	// 		echo '<tr class = "even">';
	// 	}
	// 	else{
	// 			echo "<tr>";
	// 	}
	// 	echo "<td>$row[1] </td>
	// 		<td>$row[2] </td>
	// 		<td>$row[3] </td>
	// 	</tr>";

	// }
	//$d =  $row[0]."".$row[1]."".$row[2]."".$row[3]."".$row[4];
	//echo $d;
}else{
	echo"Failed".mysqli_error($con);
}
?>