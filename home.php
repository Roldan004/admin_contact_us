
<?php 
  include 'read.php';

 
  session_start();
  error_reporting(0);
  
  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>

<style>
  .main .read-main tr th {
    width: 200px;
  }
  .main .read-main tr td {
    text-align: center;
  }
</style>

<body>
  <div class="main">
    
    <table class="read-main">
      <tr>
        <th><a href="edit.php">USER ADMIN</a></th>
        <th><a href="findex.php">CONTACT US</a></th>
        <th><a href="view.php">LIST OF CONCERN</a></th>
        <?php echo "<h1>Admin DashBoard","</h1>"; ?>
        <a href="logout.php">Logout</a>
      
      </tr>

</body>
</html>