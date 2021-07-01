<?php
session_start();
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $number=$password = $email = "";
$err = false;
$isexist = false;
$existError = false;
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_number = trim($_POST["mo_number"]);
    if(empty($input_number)){
        $err = "Please enter a Mobile Number.";     
    } elseif(!ctype_digit($input_number)){
        $err = "Please enter a Valid Number.";
    } 
     elseif (strlen($input_number) != 10) {
         $err = "Mobile Number must be 10 digits";
     }
    else{
        $number = $input_number;
    }
    
    $input_email = trim($_POST["email"]);
    if(empty($input_email))
    {
        $err = "Please enter an email.";
    }
    else
    {
        $email = $input_email;
    }

    // PHP Filters
    $input_password = trim($_POST["password"]);
    {
        $uppercase = preg_match("/[A-Z]+/",$input_password);
        $lowercase = preg_match("/[a-z]+/",$input_password);
        $digit = preg_match("/[0-8]+/",$input_password);
        $specialchar = preg_match("/[~!@#$%^&*]+/",$input_password);
        if(empty($input_password))
        {
            $err = "Please enter a password";
        }
        if(!($uppercase && $lowercase && $digit && $specialchar && strlen($input_password)>=6 && strlen($input_password)<=11))
        {
            $err="<br><b>your password must contain at least one uppercase letter, at least one lowercase, at least one digit,at least one special character and range must be 6 to 11</b>";
        }
        else
        {
             $password = $input_password;
        }
    }

      //Checks if username is already exist or not.
       $existsql = "Select * from user_data where name = '$name'";
        $result = mysqli_query($conn, $existsql);
        $num = mysqli_num_rows($result);
        if($num>0)
        {
            $isexist =true;
            $existError = true;
        }
        else
        {
            $isexist = false;
        }
    // Check input errors before inserting in database
    if(($err==false) && ($isexist == false)){
        // Prepare an insert statement
        $hash_pwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_data (name, address, mo_number, password, email) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssiss", $param_name, $param_address, $param_number, $param_password, $param_email);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_number = $number;
            $param_email = $email;
            $param_password = $hash_pwd;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header("location: webpage.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
 
    
    // Close connection
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Parlour</title>
    <!-- Google font CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">

<!-- login page css -->
<link rel="stylesheet" href="index.css">
<!-- Bootstrap CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
    <?php
       if($existError)
       {
         echo '<div class="error">
               Error!! Your Username is already exist
               </div>';  
       }
       if($err != false)
       {
         echo '<div class="error">Error!! ' . $err . '</div';         
       }
    ?>
    </header>
    <div class="container1">
        <img src="logo.png" alt="" style="height: 150px; width:150px;">
        <h1>Get Your Account</h1>
        <form action=""  name="myform" autocomplete="off" method="POST" onsubmit="return validateform()">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="name" class="input" value= "<?php echo $name;?>" placeholder="Enter Your Name"><br>
          
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input type="email" name="email" class="input" value= "<?php echo $email; ?>" placeholder="Enter Your Emali"><br>
            
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" class="input" value= "<?php echo $password; ?>" placeholder="Create a Password"><br>
            
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="conf_password" class="input" value= "<?php echo $password; ?>" placeholder="Confirm Password"><br>
            
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="number" name="mo_number" class="input" value="<?php echo $number;?>" placeholder="Enter Your Mo. Number"><br>
            
            <!-- <i class="fa fa-address-card-o" aria-hidden="true"></i> -->
            <textarea name="address" class="textarea" cols="30" rows="5" value="<?php echo $address;?>" placeholder="Enter Your addreess Here"></textarea><br>
            
            <input type="submit"  class="button btn btn-primary md-10" value="Sign up" name="button">
            <br>
            <div class="span">
            <span>Already have an Account</span><br>
            <a href="my_account.php" class="btn btn-primary" name="button">Login</a><br>
            </div>
             
             
        </form>
    </div>
</body>

<script>
function validateform() 
{
    var returnval = true;

    var password = document.forms['myform']['password'].value;
    var confirm_password = document.forms['myform']['conf_password'].value;
    if(confirm_password != password)
    {
        alert("*Both password are not same.");
        returnval = false;
    }

    return returnval;
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
</html>