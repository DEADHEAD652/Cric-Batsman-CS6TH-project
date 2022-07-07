<?php
 
include"connection.php";
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
	
	 $allowTypes = array('jpg','png','jpeg','gif');

	 if(in_array($fileType, $allowTypes)){
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$targetFilePath)){
$sql =  "INSERT INTO bowlers VALUES ('$pid','$fullname','$country','$bow_style',$shirt_no,$ing_no,$match_no,$avg,'".$fileName."')";}
   // echo ($sql);
   else{
	   $statusMsg = "Sorry, there was an error uploading your file.";
   }
}else{
   $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
}
if(mysqli_query($conn,$sql))
{
   echo "Recod inserted Successfully";
   header("location:showall.php");
}
else
   echo "Some Problem";
}
//}













	 











//}
?>


