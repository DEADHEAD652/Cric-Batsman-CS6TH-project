<?php
include "connection.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
$pid =$_REQUEST['pid'];
$sql = "SELECT * FROM bowlers WHERE pid='$pid'";

$result=mysqli_query($conn, $sql);
        if ($result) {
  $row=mysqli_fetch_assoc($result);
  
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <title>Cricket Web</title>
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
  <!--<div class="topnav-right">
    <a href="index.html">Home</a>
    <a href="showall.php">All Batters</a>
  </div>-->
</div>
    <div class="container">
      <div class="title">Bowler Profile</div>
      <div class="content">
        <form method="post" action="updatedata.php" enctype="multipart/form-data">
          <div class="user-details">
          <div class="input-box">
              <span class="details"> </span>
              ID<input type="text" name="pid" placeholder="Player ID" value="<?php echo $row['pid'];?>" required>
            </div>
            <div class="input-box">
              <span class="details"> </span>
              Full Name<input type="text" name="fullname" placeholder="FULL Name" value="<?php echo $row['fullname'];?>" >
            </div>

            <div class="input-box">
              <span class="details"> </span>
              Country
              <input type="text" name="country" placeholder="country" value="<?php echo $row['country']; ?>">
            </div>



            <div class="input-box">
              <span class="details"> </span>
              bowling Style
              <input type="text" name="bow_style" placeholder="batting postion" value="<?php echo $row['bow_style']; ?>">
            </div>
            <div class="input-box">
              <span class="details"> </span>
              Shirt No.
              <input type="text" name="shirt-no" placeholder="Shirt No." value="<?php echo $row['shirt_no']; ?>">
            </div>
            <div class="input-box">
              <span class="details"> </span>
              No. of Innings
              <input type="text" name="ing-no" placeholder="Innings" value="<?php echo $row['ing_no']; ?>">
            </div>
            <div class="input-box">
              <span class="details"> </span>
              No.of Matches
              <input type="text" name="match-no" placeholder="No. of matches" value="<?php echo $row['match_no']; ?>">
            </div>
            <div class="input-box">
              <span class="details"> </span>
              Average
              <input type="text" name="avg" placeholder="Avg" value="<?php echo $row['avg']; ?>">
            </div>
            <div class="input-box">
            <span class="details"> </span>
            Image
            <input type="file" name="image" placeholder="Choose image">
          </div>
           
            




          </div>
          <div class="button">
            <input type="submit" name="submit" value="Update">
          </div>
        </form>
      </div>
    </div>

  </body>

  </html>
<?php
}
?>