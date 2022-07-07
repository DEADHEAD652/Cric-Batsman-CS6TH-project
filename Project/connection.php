
<?php
$conn = mysqli_connect("localhost", "root", "", "project");
//$conn = mysqli_connect("fdb32.awardspace.net", "4131571_project", "pakistan@123", "4131571_project");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>