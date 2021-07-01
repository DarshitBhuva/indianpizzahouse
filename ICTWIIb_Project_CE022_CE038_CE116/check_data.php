<?php

 session_start();
 $_SESSION['user'] = $_POST['username'];
 $_SESSION['pwd'] = $_POST['password'];

 if(isset($_SESSION['user']) && isset($_SESSION['pwd']))
 {
     echo "You have singed up Successfully.<br>";
     echo "Your Username: ". $_SESSION['user'] . "<br>";
     echo "Your Password: " . $_SESSION['pwd'] . "<br>";
     echo "Make sure that keep above data with You for further proccess.<br>";
 }
  

?>