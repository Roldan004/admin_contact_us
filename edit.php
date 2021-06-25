<?php 
  include 'read.php';

 
  session_start();
  error_reporting(0);
  
  if (!isset($_SESSION['username'])) {
    header("Location: home.php");
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
        <th><a echo>ID</a></th>
        <th><a echo>USERNAME</a></th>
        <th><a echo>EMAIL</a></th>
        <th><a echo>PASSWORD</a></th>
        <th>ACTIONS</th>
        <?php echo "<h1>Welcome Super Admins","</h1>"; ?>
        <a href="logout.php">Logout</a>
      
      </tr>
      <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
        <tr>
          <td><?php echo $results['id']; ?></td>
          <td><?php echo $results['username']; ?></td>
          <td><?php echo $results['email']; ?></td>
          <td><?php echo $results['password']; ?></td>
          <td>
            <form action="update.php" method="post">
              <input type="submit" name="edit" value="EDIT" />
              <input type="hidden" name="editId" value="<?php echo $results['id']; ?>" />
              <input type="hidden" name="editUsername" value="<?php echo $results['username']; ?>" />
              <input type="hidden" name="editPassword" value="<?php echo $results['password']; ?>" />
            </form>
            <form action="delete.php" method="post">
              <input type="submit" name="delete" value="DELETE" />
              <input type="hidden" name="deleteId" value="<?php echo $results['id']; ?>"/>
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
  </br></br>
  <a href="home.php">----->>>Back</a>
</body>
</html>