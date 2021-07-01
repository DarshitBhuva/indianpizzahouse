<?php
   session_start();
  echo "Name: " . $_SESSION['name'];

   if(!isset($_COOKIE))
   {
    $cookie_name = "profile1";
    $cookie_value = 1;
    setcookie($cookie_name, $cookie_value, time()+60*60, "/");
   }


    if(isset($_COOKIE[$cookie_name]))
    {
    ?>
    <?php
    
    if(isset($_SESSION['size']) && isset($_SESSION['quantity']) && isset($_SESSION['payment'])&&isset($_SESSION['quality']) && isset($_SESSION['number'])&&isset($_SESSION['name']))
    {

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="stylesheet" href="bill.css">

    <!-- Table css links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
</head>

<body>
    <div class="container">
        <img src="logo.png" alt="" style="height:12rem; width:15rem;"><br><br>
        <hr>
        <span class="name" style="font-weight:bold;"> Name:&nbsp;&nbsp;<?php echo $_SESSION['name'];?></span>
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
                <tr class="table-secondary">
                    <th scope="row">1</th>
                    <td>Pizza:</td>
                    <td><?php echo $_SESSION['quality']?></td>
                </tr>
                <tr class="table-primary">
                    <th scope="row">2</th>
                    <td>Quantity:</td>
                    <td><?php echo $_SESSION['quantity']?></td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">3</th>
                    <td>Size:</td>
                    <td><?php echo $_SESSION['size']?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Transaction ID:</td>
                    <td><?php echo $_SESSION['number']?></td>
                </tr>
                <tr class="table-primary">
                    <th scope="row">5</th>
                    <td>Total Payment:</td>
                    <td><?php echo $_SESSION['payment']. " Rs"?></td>
                </tr>
            </tbody>
        </table>
        <div class="print">
            <button onclick="window.print()" class="btn">Print</button>
        </div>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script> -->
</body>

</html>


<?php      
   }
   else
   {
       echo "error";
   }
?>


<?php
      die();
      }
   

?>