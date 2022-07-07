<?php
include"connection.php";

	 $pid = $_REQUEST['pid'];
	
$sql =  "DELETE from bowlers where pid='$pid'";
if(mysqli_query($conn,$sql)){
	header("location:showall.php");
	
}
else{
	echo"issue in deleting data";
}

//}
?>