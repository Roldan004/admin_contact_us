
<?php 

  include 'config.php';

  session_start();
  error_reporting(0);

  ?>

<!DOCTYPE html>
<html>
<body>
    
<?php

$sql = "SELECT id, first_name, last_name, email, phone, title, message, datetime FROM contact_us";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th><th>Name</th></th> <th><th>Email</th></th> <th><th>Contact Number</th></th> <th><th>Title</th></th> <th><th>Message</th></th> <th><th>Date-Time</th></th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td><td>".$row["first_name"]." ".$row["last_name"]."</td></td><td><td>".$row["email"]."</td></td> <td><td>".$row["phone"]."</td></td> <td><td>".$row["title"]."</td></td> <td><td>".$row["message"]."</td></td> <td><td>".$row["datetime"]."</td></td>.";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
   
<a href="home.php">----->>>Back</a>
</body>
</html>