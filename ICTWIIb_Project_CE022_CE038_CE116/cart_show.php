<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
        session_start();
        require_once "config.php";
        $name = $_SESSION['name'];
    ?>
    <div class="container my-3">
        <h1 class="text-center">Shopping Cart</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
            <?php
                $sql = "select * from cart where username='$name'";
                $result2 = mysqli_query($conn, $sql);
                while ($row2=mysqli_fetch_assoc($result2)) {
                        $img = $row2['img'];
                        $desc = $row2['description'];
                        $pizza = $row2['pizza'];
                        $price = $row2['regular'];
                        // echo '<img src='. $img .' alt="" style="height:15rem; width:15rem;">';
                        // echo $desc;
                    

                echo '<div class="col text-center">
                <div class="card h-100">
                  <img src="'.$img.'" class="card-img-top" alt="..." style="height:180px;width:180px;margin:auto;">
                  <div class="card-body">
                    <h5 class="card-title">'.$pizza.'</h5>
                    <p class="card-text">'.$desc.'</p>
                    <b>&#8377;'.$price .'</b><br><br>
                    <a href="order2.php?name='.$pizza.'" name="button" class="btn btn-dark btn-sm">Order Now</a>
                    <a href="cart_delete.php?name='.$pizza.'" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;Remove</a>
                  </div>
                  </div>
                </div>';

   
                 }

              ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>