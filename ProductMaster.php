<?php
require"connection.php";
$prm_Name=$_POST["prm_Name"];
$status=$_POST["Status"];
$prm_qty1=$_POST["prm_qty1"];
$prm_qty2=$_POST["prm_qty2"];
$prm_qty3=$_POST["prm_qty3"];
$prm_pri1=$_POST["prm_pri1"];
$prm_pri1=$_POST["prm_pri1"];
$prm_pri1=$_POST["prm_pri1"];
$prm_frm_ID=$_GET["id"];
 $url=$_POST['prm_Path'];


$ext = ".jpg";

 $new = '/images/';

$name1 = $new.''.$prm_frm_ID.''.$ext;
//  // $success1 = file_put_contents($name1, $url);
// $success1 = file_put_contents($name1, $url);
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["prm_Path"]["name"]);
move_uploaded_file($_FILES["prm_Path"]["tmp_name"], $target_file);
echo "The file ". basename( $_FILES["prm_Path"]["name"]). " has been uploaded.";

	$path1 = "http://localhost:8080/web/".$name1;

 $sqlDetail = " INSERT INTO tb_pdtmaster(  prm_Name, prm_frm_ID,status , prm_Path)
     VALUES (  '$prm_Name','1','$status','$path1')";

if(mysqli_query($con,$sqlDetail)){
 echo "<h3>Data insertion success</h3>";
}else{
 echo"Data insertion error".mysqli_error($con);
}
?>