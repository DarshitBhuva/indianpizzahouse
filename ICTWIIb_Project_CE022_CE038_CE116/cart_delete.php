<?php
  require_once "config.php";
  session_start();
  $pizza = $_GET['name'];
  $username = $_SESSION['name'];

  $sql = "DELETE FROM `cart` WHERE username='$username' AND pizza='$pizza'";
  $result = mysqli_query($conn, $sql);

  if($result)
  {
      header("Location: cart_show.php");
  }

?>