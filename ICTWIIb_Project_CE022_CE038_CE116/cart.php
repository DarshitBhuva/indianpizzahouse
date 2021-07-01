<?php
   session_start();
   $pizza_name = $_GET['name'];
   $name = $_SESSION['name'];
   require_once "config.php";

   $sql = "Select * from pizza_details where name = '$pizza_name'";

   $result = mysqli_query($conn, $sql);

   if($row= mysqli_fetch_assoc($result))
   {
       $img = $row['img'];
       $desc = $row['description'];
       $price = $row['regular'];
   }

   $sql1 = "INSERT INTO `cart` ( `username`, `pizza`, `img`, `description`, `regular`) VALUES ( '$name', '$pizza_name', '$img', '$desc', '$price')";
   $result1 = mysqli_query($conn, $sql1);

   if($result1)
   {
    header("Location: cart_show.php");
        
   }
?>