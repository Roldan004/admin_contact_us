<?php 


session_start();
if (!isset($_SESSION['username'])) {
    header("Location: home.php");
}


session_destroy();

header("Location: index.php");

?>