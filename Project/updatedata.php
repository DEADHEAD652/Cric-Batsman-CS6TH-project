<?php
include"connection.php";

// File upload path 
$targetDir = "images/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_REQUEST['submit']))
{
     
   $pid = $_REQUEST['pid'];
	 $fullname = $_REQUEST['fullname'];
	 $country   = $_REQUEST['country'];
	 $bow_style  = $_REQUEST['bow_style'];
     $shirt_no   = $_REQUEST['shirt-no'];
     $ing_no    = $_REQUEST['ing-no'];
     $match_no   = $_REQUEST['match-no'];
     $avg    = $_REQUEST['avg'];

     move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
     $sql =  "UPDATE bowlers  SET  fullname='$fullname',country='$country',bow_style='$bow_style',shirt_no=$shirt_no,ing_no=$ing_no,match_no=$match_no,avg=$avg,image='$fileName' WHERE pid='$pid' ";
		
     if($result = mysqli_query($conn, $sql))
     {
        header("location:showall.php");
     }
     else
     {
        echo "Error updating record";
     }
  }
  ?>