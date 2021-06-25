<?php 
  include 'config.php';

  session_start();
  error_reporting(0);
  
  $sort = 'ASC';
  $column = 'id';

  if (isset($_GET['column']) && isset($_GET['sort'])) {
    $column = $_GET['column'];
    $sort = $_GET['sort'];

    // Opposite
    $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC'; 
  }

  $queryAccounts = "SELECT * FROM users ORDER BY $column $sort";
  $sqlAccounts = mysqli_query($conn, $queryAccounts);
?>