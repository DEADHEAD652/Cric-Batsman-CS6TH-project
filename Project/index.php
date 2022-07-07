<?php
include "connection.php";
$sql = "SELECT * from bowlers";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cricket Web</title>
  <link rel="stylesheet" href="style/style.css">


  
</head>

<body>
  <div class="topnav">
    <div class="topnav-left"><a href="index.php">Cricket Web</a></div>
    <div class="topnav-right">
      <a href="login.php">Login</a>
    </div>
  </div>
  <div class="bd">
    <h1>Welcome to Cricket Web!</h1>
  </div>

  <div class="container">
    <div class="row">
      
      <?php
      while ($rows = mysqli_fetch_assoc($result)) { ?>
        <div class="col-sm-12 col-md-4 col-lg-4 img-thumbnail" align="center">
          <p class='btn btn-block btn-primary'><?php echo $rows["fullname"]; ?> </p><br>
          <a href="details.php?pid=<?php echo $rows["pid"]; ?>"> <img src="images/<?php echo $rows["image"]; ?>" class="img-thumbnail img-fluid rounded"></a><br><br>
        </div>
      <?php
      }
      ?>


    </div>
  </div>

</body>

</html>