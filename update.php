<?php 
  include 'config.php'; 
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
  }


  if (isset($_POST["edit"])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
    //var_dump($_POST);
  }

  if (isset($_POST['update'])) {

    //var_dump($_POST);
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE users SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($conn, $queryUpdate);
    echo $sqlUpdate;
    if($sqlUpdate) {
      echo '<script>alert("Successfully updated!")</script>';
      echo '<script>window.location.href = "home.php"</script>';
    }

    
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
</head>
<body>
<div class="main">
    <form class="update-main" action="update.php" method="post">
      <h3>UPDATE USER:</h3>
      <input type="text" name="updateUsername" placeholder="Enter username" value="<?php echo $editUsername ?>" required/>
      <input type="password" name="updatePassword" placeholder="Enter password" value="<?php echo $editPassword ?>"required/>
      <input type="submit" name="update" value="SAVE" />
      <input type="hidden" name="updateId" value="<?php echo $editId?>" />
    </form>
</body>
</html>