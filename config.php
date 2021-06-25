<?php 

  $host = 'localhost';
  $user = 'admin';
  $password = 'password';
  $database = 'phplearning5';

  $conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>