<?php
require_once "captcha.php";
$error = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "config.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = "";
    $input_password = trim($_POST['password']);
    $confirm_password = trim($_POST['conf_password']);
    
       $uppercase = preg_match("/[A-Z]+/",$input_password);
        $lowercase = preg_match("/[a-z]+/",$input_password);
        $digit = preg_match("/[0-8]+/",$input_password);
        $specialchar = preg_match("/[~!@#$%^&*]+/",$input_password);
        if(empty($input_password))
        {
            $error = "Please enter a password";
        }
        if(!($uppercase && $lowercase && $digit && $specialchar && strlen($input_password)>=6 && strlen($input_password)<=11))
        {
            $error="<br><b>your password must contain at least one uppercase letter, at least one lowercase, at least one digit,at least one special character and range must be 6 to 11</b>";
        }
        else
        {
             $password = $input_password;
             if ($password == $confirm_password) {
                if ($_POST['captcha'] == $_POST['rand_captcha']) {
                    $sql = "SELECT * FROM user_data WHERE name = '$username' AND email='$email'";
                    $result = mysqli_query($conn, $sql);
                    if($result)
                    {
                        $num = mysqli_num_rows($result);
                        if ($num == 1) {
                            $hash = password_hash($password, PASSWORD_DEFAULT);
                            $sql1 = "UPDATE user_data SET password = '$hash' WHERE name = '$username' AND email='$email'";
                            $result1 = mysqli_query($conn, $sql1);
        
                            if ($result1) {
                                echo "<script>alert('Your Password Successfully Reset..')</script>";
                                echo "<script>window.location = 'my_account.php'</script>";
                            }
                        }else {
                            $error = "Error!! No Data Found for Password Update.";
                        }
                    } 
                } else {
                    $error = "Error!! Please Enter a Valid Captcha";
                }
            } else {
                $error = "Error!! Both Password didn't Match.";
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
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot_password1.css">
    <!-- Awesome Font Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    if ($error != false) {
        echo '<div class="error"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;&nbsp;' . $error . '</div>';
    }
    ?>
    <div class="container1">
        <img src="logo.png" alt="">
        <div class="forms">
            <form action="" method="post">
                <div class="input">
                    <label>Username</label><br>
                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                    <input type="text" name="username" id="" required><br>
                </div>
                <div class="input">
                    <label>Email</label><br>
                    <input type="email" name="email" id="" required><br>
                </div>
                <div class="input">
                    <label>New Password</label><br>
                    <input type="password" name="password" id="" required><br>
                </div>
                <div class="input">
                    <label>Re-enter New Password</label><br>
                    <input type="password" name="conf_password" id="" required><br>
                </div>
                <div class="captcha">
                    <input type="text" name="captcha" placeholder="Captcha">
                    <span>
                        <?php echo $_SESSION['captcha']; ?>
                    </span>
                    <input type="hidden" name="rand_captcha" value="<?php echo $_SESSION['captcha']; ?>">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>

    </div>
</body>

</html>
