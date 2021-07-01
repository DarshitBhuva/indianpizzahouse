<?php
session_start();
require_once "config.php";
$name = $_GET['name'];
$sql = "select * from pizza_details where name = '$name'";
$result = mysqli_query($conn, $sql);

if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $regular = $row['regular'];
        $medium = $row['medium'];
        $large = $row['large'];
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    if ($_POST['size'] == 'small') {
        $payment = trim($_POST['quantity']) * $regular;

    } elseif ($_POST['size'] == 'large') {
        $payment = trim($_POST['quantity']) * $large;

        // echo "Your payment : " . $payment . "<br>";
    } elseif ($_POST['size'] == 'medium') {
        $payment = trim($_POST['quantity']) * $medium;

    }

    $_SESSION['quantity'] = trim($_POST['quantity']);
    $_SESSION['size'] = trim($_POST['size']);
    $_SESSION['payment'] = $payment;
    $_SESSION['quality'] = $_GET['name'];
    $_SESSION['address'] = trim($_POST['address']);
    
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
a[name="button"]{
    background-color:red; 
    padding:12px; 
    
    margin-left: 25vw;
    color: white;
    border-radius: 12px;
    text-decoration: none;
}
</style>
<body>
 <div class="container">
    <img src="logo.png" alt="" style="height:13rem; width:15rem; margin:15px auto;display:block;"><br><br>
    <hr>
    <!-- <h2>Indian Pizza House</h2> -->
  <table class="table">
    <thead>
       <tr>
          <th scope="col">#</th>
          <th scope="col">Details</th>
          <th scope="col">Payment</th>
       </tr>
    </thead>
    <tbody>
       <tr>
          <th scope="row">1</th>
          <td>Pizza</td>
          <td>'. $_SESSION['quality'].'</td>
       </tr>
       <tr class="table-primary">
          <th scope="row">2</th>
          <td>Quantity</td>
          <td>'. $_SESSION['quantity'].'</td>
       </tr>
       <tr>
          <th scope="row">3</th>
          <td>Size</td>
          <td>'. trim($_POST['size']).'</td>
       </tr>
       <tr>
          <th scope="row">4</th>
          <td><b>Payment</b></td>
          <td><b>'. $payment.' Rs</b></td>
       </tr>
    </tbody>
 </table>
 <a href = "payment2.php" name="button">Continue Payment</a>
 </div>
 </body>
 </html>';

    // echo '<script>confirm("Do you really want to delete?")</script>';

    //   header("location: payment.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Order Page</title>
    <link rel="stylesheet" href="order.css">
</head>

<body>
    <div class="container">
        <img src="logo.png" alt="">
        <form action="" method="POST" class="form">
            <h1>Order Now</h1>
            <table>
                <tr>
                    <td>Size:</td>
                    <td><select name="size">
                            <option value="small" selected>Regular&nbsp;&nbsp;&nbsp;<b>Rs. <?php echo $regular; ?></b>
                            </option>
                            <option value="medium">Medium&nbsp;&nbsp;&nbsp;<b>Rs. <?php echo $medium; ?></b></option>
                            <option value="large">Large&nbsp;&nbsp;&nbsp;<b>Rs. <?php echo $large; ?></b></option>
                        </select></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="number" name="quantity" min="1" required></td>
                </tr>
                <tr>
                    <td><i class="fa fa-address" aria-hidden="true"></i>Address:</td>
                    <td><textarea name="address" cols="30" rows="3" required></textarea></td>
                </tr>


                <tr>
                    <td colspan="2"><input type="submit" value="Payment Now"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>