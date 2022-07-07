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
  <title> Cricket Web</title>
  <link rel="stylesheet" href="style/style.css">


 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body><div class="topnav">
  <div class="topnav-left"><a href="#">Cricket Web</a></div>
  <div class="topnav-right">
    <a href="showall.php">All bowlers<a>
  <a href="logout.php">Logout</a>
  </div>
</div>
  <!--<div class="header">
    <div class="left"><img src="/style/icon.jpg" alt=""></div>
    <div class="right">
      <h1>Add Batsman</h1>
    </div>
  </div>-->
  <div class="container">
    <div class="title">bowler Profile</div>
    <div class="content">
      <form method="post" action="insertdata.php" enctype="multipart/form-data">
        <div class="user-details">
        <div class="input-box">
            <span class="details"> </span>
            ID<input type="text" name="pid" placeholder="Player ID" >
          </div> 
          <div class="input-box">
            <span class="details"> </span>
            Full Name<input type="text" name="fullname" placeholder="FULL Name" >
          </div>

          <div class="input-box">
            <span class="details"> </span>
            Country
            <input type="text" name="country" placeholder="country">
          </div>



          <div class="input-box">
            <span class="details"> </span>
            bowling style
            <input type="text" name="bow_style" placeholder="batting postion">
          </div>
          <div class="input-box">
            <span class="details"> </span>
            Shirt No.
            <input type="text" name="shirt-no" placeholder="Shirt No." required>
          </div>
          <div class="input-box">
            <span class="details"> </span>
            No. of Innings
            <input type="text" name="ing-no" placeholder="Innings">
          </div>
          <div class="input-box">
            <span class="details"> </span>
            No.of Matches
            <input type="text" name="match-no" placeholder="No. of matches">
          </div>
          <div class="input-box">
            <span class="details"> </span>
            Average
            <input type="text" name="avg" placeholder="Avg">
          </div>
          <div class="input-box">
            <span class="details"> </span>
            Image
            <input type="file" name="image" placeholder="Choose image">
          </div>
          




        </div>
        <div class="button">
          <input type="submit" name="submit" value="Insert Record">
        </div>
      </form>
    </div>
  </div>

</body>

</html>
<?php
}
?>