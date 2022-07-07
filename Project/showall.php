<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
else
{
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> All Bowlers </title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="topnav">
        <div class="topnav-left"><a href="#">Cricket Web</a></div>
        <div class="topnav-right">
        <a href="insertform.php">Add bowler</a>

        <a href="logout.php">Logout</a>
         
        </div>
      </div>
  <div class="container">
    <div class="title">All bowlers</div>
    <div class="content" align="center">
        <table class="table table-striped" >
         <thead>
          <tr>
           <th>ID</th><th>Full Name</th><th>Country</th><th>Bowling Style</th><th>Shirt No</th><th>Innings</th><th>Matches</th><th>Average</th><th>image</th><th>Updation</th><th>Deletion</th>
          </tr>
         </thead>
         <tbody>
         <?php 
         include"connection.php";
         $sql ="SELECT * FROM bowlers";
         $result= mysqli_query($conn,$sql);
             while($rows= mysqli_fetch_assoc($result) )
            {
              $imageURL = 'images/'.$rows["image"];
    				echo"<tr>";
            echo"<td>".$rows['pid']."</td>";
    				echo"<td>".$rows['fullname']."</td>";
    				echo"<td>".$rows['country']."</td>";
    				echo"<td>".$rows['bow_style']."</td>";
    				echo"<td>".$rows['shirt_no']."</td>";
            echo"<td>".$rows['ing_no']."</td>";
            echo"<td>".$rows['match_no']."</td>";
            echo"<td>".$rows['avg']."</td>";
            echo"<td><img style='width:50px' src='$imageURL'</td>";
            

            

    				echo"<td><a class='btn btn-success' href=updateform.php?pid=".$rows['pid'].">Update </a></td>";
    				echo"<td><a class='btn btn-danger' href=deletedata.php?pid=".$rows['pid'].">Delete </a></td>";
    				echo"</tr>";
	         }
		   ?>    
          
         </tbody> 
       </table>
      </div>
  </div>      
</body>
</html>
<?php
}
?>
