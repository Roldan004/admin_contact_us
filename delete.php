<?php 
  include 'config.php';

  session_start();
  error_reporting(0);

  if (isset($_POST["delete"])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM users WHERE id = $deleteId";
    $sqlDelete = mysqli_query($conn, $queryDelete);

    echo '<script>alert("Successfull deleted id: '.$deleteId.'!")</script>';
    echo '<script>window.location.href = "home.php"</script>';
  } else {
    echo '<script>window.location.href = "home.php"</script>';
  }
?>