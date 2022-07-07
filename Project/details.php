<?php
include "connection.php";
$pid = $_REQUEST["pid"];
$sql = "SELECT * FROM bowlers WHERE pid=$pid";


// $sql = "SELECT * FROM bowlers WHERE pid='$pid'";

if ($result = mysqli_query($conn, $sql))
    $row = mysqli_fetch_assoc($result);

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cricket Web</title>
        <link rel="stylesheet" href="style/style.css">




    </head>

    <body >
    <div class="topnav">
    <div class="topnav-left"><a href="index.php">Cricket Web</a></div>
    <div class="topnav-right">
      <a href="login.php">Login</a>
    </div>
  </div>
        <div class="center" style="margin-top:1px;">
            <div class="mr">
                <img style="width:250px;" src="images/<?php echo $row['image'] ?>" alt="">
            </div>
            <div class="rig">
                <table>
                    <tr>
                        <td>Full Name</td>
                        <td><?php echo $row['fullname'] ?></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td><?php echo $row['country']; ?></td>
                    </tr>
                    <tr>
                        <td>Bowling Style</td>
                        <td><?php echo $row['bow_style']; ?>th</td>
                    </tr>
                    <tr>
                        <td>Shirt Number</td>
                        <td><?php echo $row['shirt_no']; ?></td>
                    </tr>
                    <tr>
                        <td>Innings</td>
                        <td><?php echo $row['ing_no']; ?></td>
                    </tr>
                    <tr>
                        <td>Matches</td>
                        <td><?php echo $row['match_no']; ?></td>
                    </tr>
                    <tr>
                        <td>Average</td>
                        <td><?php echo $row['avg']; ?></td>
                    </tr>



                </table>
            </div>
        </div>
    </body>

    </html>
