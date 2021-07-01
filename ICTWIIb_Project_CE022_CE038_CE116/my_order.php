<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
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

   $username = $_SESSION['name'];
?>
<div class="container my-3">
    <h1 class="text-center">My Orders</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
  <?php
    $sql = "select * from customer where User = '$username'";
    $result= mysqli_query($conn, $sql);
  
    if($result)
    {
        while ($row = mysqli_fetch_assoc($result)) {
            $pizza_name = $row['pizza'];
            $quantity = $row['quantity'];
            $size = $row['size'];
            $payment = $row['Payment'];
            $time = $row['time'];
            $id = $row['no'];
           
            require_once "config.php";
            $sql1 = "select * from pizza_details where name = '$pizza_name'";
            $result1 = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_assoc($result1);
            $img = $row['img'];

            
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d H:i:s');
    
            $current_time = strtotime($date);
            $cancle_time = strtotime($time) + 60*10; 
           
            $isCancel = " ";
            if($current_time<$cancle_time)
            {
               $isCancel = '<a href="myOrder_cancle.php?pizza='.$pizza_name.'&id='.$id.'" class="btn btn-danger">Cancle Order</a>';
               
            }

            $delivery_time = strtotime($time) + 60*60; 
            if($current_time<$delivery_time)
            {
                $status = "On the Way";
            }
            else{
                $status = "Delivered";
            }

            echo '<div class="col text-center">
                    <div class="card h-100">
                    <img src="'.$img.'" class="card-img-top" alt="..." style="height:180px;width:180px;margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title">'.$pizza_name.'</h5>
                        <p>Quantity: '.$quantity .'</p>
                        <b>&#8377;'.$payment .'</b><br><br>'.$isCancel.'<br>
                        <b style="float:right; color:green;">'.$status.'</b><br>
                        <span style="float:right;">On '.$time.'</span>
                    </div>
                    </div>
                    </div>';
              
            
        }
    }
?>
  </div>
</div>
</body>

</html>