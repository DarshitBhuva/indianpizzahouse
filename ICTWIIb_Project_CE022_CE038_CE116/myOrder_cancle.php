<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "order_data";
 
  $conn = mysqli_connect($servername, $username, $password, $database);
 
  if($conn == FALSE)
  {
      echo "Error->" . mysqli_connect_error();
  }
  
  $pizza = $_GET['pizza'];
  $id = $_GET['id'];
  $sql = "DELETE FROM `customer` WHERE no='$id'";
  $result = mysqli_query($conn, $sql);

  if($result)
  {
      header("Location: my_order.php");
  }

?>