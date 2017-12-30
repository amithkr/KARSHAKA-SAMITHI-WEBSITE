<?php
require"connection.php";
$prm_Name=$_POST["prm_Name"];
$prm_qty1=$_POST["prm_qty1"];
$prm_qty2=$_POST["prm_qty2"];
$prm_qty3=$_POST["prm_qty3"];
$prm_pri1=$_POST["prm_pri1"];
$prm_pri2=$_POST["prm_pri2"];
$prm_pri3=$_POST["prm_pri3"];
$unit=$_POST["unit"];
$prm_frm_ID=$_GET["id"];
$status=$_POST["Status"];

    $file = $_FILES["fileToUpload"]["name"];
    $filePath = "images/" . $file;
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filePath)){
        /*prepare sql query here and insert*/
        
        $sql = "INSERT INTO tb_pdtmaster(prm_Name, prm_frm_ID,status,prm_Path) VALUES('$prm_Name','$prm_frm_ID','$status','$filePath');";
        if(mysqli_query($con,$sql)){
            $d = mysqli_query( $con, "SELECT LAST_INSERT_ID()");
            $row = mysqli_fetch_row($d);
            $x =  $row[0];
            // echo $x;
            if ($prm_qty1 != "") {
                
            $sqlDetail = " INSERT INTO tb_pdtdetail (  prd_prm_ID, prd_Qty,prd_Prize , prd_Unit)
                 VALUES (  '$x','$prm_qty1','$prm_pri1','$unit')";
                       if(mysqli_query($con,$sqlDetail)){
                        echo "Success";
                       }else{
                        print_r(mysqli_error($con));
                       }
                        if ($prm_qty2 != "") {
                
            $sqlDetail1 = " INSERT INTO tb_pdtdetail (  prd_prm_ID, prd_Qty,prd_Prize , prd_Unit)
                 VALUES (  '$x','$prm_qty2','$prm_pri2','$unit')";
                        mysqli_query($con,$sqlDetail1);
                        if ($prm_qty3 != "") {
                
            $sqlDetail2 = " INSERT INTO tb_pdtdetail (  prd_prm_ID, prd_Qty,prd_Prize , prd_Unit)
                 VALUES (  '$x','$prm_qty3','$prm_pri3','$unit')";
                        mysqli_query($con,$sqlDetail2);
            }
            }

            }
           header("Location: FarmerDashboard.php?id=".$prm_frm_ID);
        }else{
            echo "File not uploaded there is an error <strong>{$filePath}</strong>";
        }
    }else{

        echo "File not uploaded there are an error <strong>{$file}</strong>";

    
    }

    ?>