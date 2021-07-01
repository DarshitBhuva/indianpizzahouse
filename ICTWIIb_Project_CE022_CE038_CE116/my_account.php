<?php
session_start();
require_once "config.php";

if (isset($_GET['username']) && isset($_GET['password'])) {
  $username = $_GET['username'];
  $password = $_GET['password'];
  $sql = "SELECT * FROM user_data where name = '$username'";

  if ($result = mysqli_query($conn, $sql)) {
    $err = false;
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $bool = password_verify($password, $row['password']);

        if (($row['name'] == $_GET['username']) && ($bool == true)) {
          $_SESSION['name'] = $row['name'];
          $_SESSION['email'] = $row['email'];
          //   echo "You are successfully signed in!<br>";
          //   echo "Click Here to visit Website.<br>";
          //   echo "<a href='webpage.php'>Go to Website</a>";
          echo "<script>window.location = 'webpage.php'</script>";
          exit(0);
        }
      }
      $err = true;
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="my_account.css">
  <!-- Font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body bgcolor="skyblue">
  <?php

  if (isset($err) && ($err = true)) {
  ?>
    <div class="error">
    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> 
      Your username/password not registered. click here to 
      <a href="login.php" style="text-decoration:none;">Sign Up</a></strong>
      <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>
      <script>
        responsiveVoice.speak("Your username or password not registered.");
      </script>
      <script>
        responsiveVoice.setDefaultRate(0.9)
      </script>
    </div>
  <?php
  }
  ?>
  <div class="container">
    <div class="forms">
      <img src="logo.png" alt="" style="height: 150px; width: 150px; text-align:center;">
      <h1>Login</h1>
      <form action="" autocomplete="off" method="GET">
        <input type="text" name="username" placeholder="Enter Your name"><br>
        <input type="password" name="password" placeholder="Enter Your Password"><br>
        <input type="submit" value="Go Now">
      </form>
      <a href="forgot_password.php">Forgot Password</a>
    </div>
  </div>
</body>

</html>