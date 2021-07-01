<?php
   
   session_start();
   if(isset($_SESSION['size']) && isset($_SESSION['quantity']) && isset($_SESSION['payment']) && isset($_SESSION['quality']) && isset($_SESSION['number']) && isset($_SESSION['name']) && isset($_SESSION['email']))
   {

    $email = $_SESSION['email'];
    $name=$_SESSION['name'];
    $pizza=$_SESSION['quality'];
    $size=$_SESSION['size'];
    $quantity = $_SESSION['quantity'];
    $amount = $_SESSION['payment'];
    $TransactionId = $_SESSION['number'];

    $to=$email;
    $headers="From:darshitbhuva9330@gmail.com";
    $headers='MIME-Version:1.0';
    $headers='Content-type:text/html;charset=iso-8859-1';
    $subject="Indian Pizza House Order bill";


    $message='<html>
              <head>
              <style>
              tr{
                  text-align:center;
              }
              td,th
              {
                padding:5px;
                color:black;
              }
              img{
                  width:200px;
                  width:200px;
              }
              header
              {
                  padding-left:7vh;
                  font-size:20px;
              }
              </style>
              </head>
              <body>
              <p>Thank you for ordering pizzas. If you have any issue to delievery then directly contact our manager from website.</p>
              <img src="https://cdn.pixabay.com/photo/2016/10/27/08/37/cook-1773658_960_720.png">
              <header><strong>Name:'.$name .'</strong></header>
              <table>
              <tr>
                  <th>#</th>
                  <th>Details</th>
                  <th>Payment</th>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Pizza:</td>
                  <td>'.$pizza.'</td>
              </tr>
              <tr style="background-color:#7abaff;">
                  <td>2</td>
                  <td>Quantity:</td>
                  <td>'.$quantity.'</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Size:</td>
                  <td>'.$size.'</td>
              </tr>
              <tr style="background-color:#7abaff;">
                  <td>4</td>
                  <td>Transaction ID:</td>
                  <td>'.$TransactionId.'</td>
              </tr>
              <tr>
                  <td>5</td>
                  <td>Total amount:</td>
                  <td>'.$amount.'</td>
              </tr>
              </table>
              </body>
              </html>';

    if(mail($to,$subject,$message,$headers))
    {
        echo '<div class="h-10 p-5 bg-light border rounded-3">
        <img src="https://openjournalsystems.com/wp-content/uploads/2017/07/payment-success.png" style="display:block;margin:auto;height:100px;width:100px;" alt="">
        <p class="text-center"><b>Transaction Completed Successfully</b></p>
    </div>';
    }
    
  ?>    
      <!DOCTYPE html>
      <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Bill</title>
         <link rel="stylesheet" href="bill.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 </head>
 <body>
   <div class="container">
      <img src="logo.png" alt="" style="height:12rem; width:15rem;"><br><br>
      <hr>
      <span class="name" style="font-weight:bold;"> Name:&nbsp;&nbsp;<?php echo $_SESSION['name'];?></span><br><br>
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
            <td>Pizza:</td>
            <td><?php echo $_SESSION['quality'];?></td>
         </tr>
         <tr class="table-primary">
            <th scope="row">2</th>
            <td>Quantity:</td>
            <td><?php echo $_SESSION['quantity'];?></td>
         </tr>
         <tr>
            <th scope="row">3</th>
            <td>Size:</td>
            <td><?php echo $_SESSION['size'];?></td>
         </tr>
         <tr>
            <th scope="row">4</th>
            <td>Transaction&nbsp;ID:</td>
            <td><?php echo $_SESSION['number'];?></td>
         </tr>
         <tr class="table-primary">
            <th scope="row">5</th>
            <td>Total&nbsp;Payment:</td>
            <td><?php echo $_SESSION['payment']. " Rs";?></td>
         </tr>
      </tbody>
   </table>
   <div class="print">
        <button onclick="window.print()" class="btn" style="width:90px;">Download</button>
        <a href="webpage.php" class = "btn btn-danger mx-2">Go to Home</a>
   </div>
   <div>
      
   </div>
   </div>
    
   
</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
      
      
<?php      
   }
   else
   {
       echo "error";
   }
?>