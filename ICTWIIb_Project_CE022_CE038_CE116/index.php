<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza House</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Google fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="webpage.css">
    <!-- CSS menu button -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="navigation">
        <div class="navbar">
            <a href="webpage.php">Home</a>
            <div id="myLinks">
                <a href="veg_pizza.php">Veg-Pizza</a>
                <a href="non_veg_pizza.php">Non-veg Pizza</a>
                <a href="pizza_mania.php">Pizza Mania</a>
                <a href="contact.php">Contact</a>
                <a href="feedback.php">feedback</a>
                <a href="my_account.php">Logout</a>
                <!-- <form action="bill.php">
                    <input type="text" name="" id="" placeholder="Search Here">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form> -->
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

    </div>


    <div class="heading">

        <!-- <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script> 
       <script>responsiveVoice.speak("Welcome to indian pizza House");</script>
       <script>responsiveVoice.setDefaultRate(0.9)</script> -->
        <h2><?php
            if (isset($_SESSION['name'])) {
                echo "Welcome " . $_SESSION['name'] . " to<br>";
            }
            ?></h2>
        <h1>Indian Pizza House</h1>

        <div class="image">
            <img src="https://cdn.pixabay.com/photo/2016/04/21/22/50/pizza-1344720_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2016/04/09/09/22/pizza-1317699_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2014/07/08/12/34/pizza-386717_960_720.jpg" alt="">
        </div>
    </div>

    <div class="container">
        <h1 style="text-align:center;">Indian Pizza House Menu</h1>
        <div class="menu">
            <div class="card" id="card1">
                <h2>Veg Pizza</h2>
                <img src="https://www.dominos.co.in/theme2/front/images/menu-images/my-vegpizza.jpg" alt=""><br>
                <a href="veg_pizza.php" name="button">View All</a>
            </div>
            <div class="card" id="card2">
                <h2>Non-Veg Pizza</h2>
                <img src="https://www.dominos.co.in/theme2/front/images/menu-images/my-nonveg.jpg" alt=""><br>
                <a href="non_veg_pizza.php" name="button">View All</a>
            </div>
            <div class="card" id="card3">
                <h2>Pizza-Mania</h2>
                <img src="https://www.dominos.co.in/theme2/front/images/menu-images/my-pizzamania.png" alt=""><br>
                <a href="pizza_mania.php" name="button">View All</a>
            </div>
            <!-- <div class="card" id="card4"></div> -->
        </div>
    </div>

    <footer>
        <div class="center">
            copyright &copy; pizzahouse.atwebpages.com <br> All rights reserved
        </div>
    </footer>
</body>

<script>
function myFunction() {
    let x = document.getElementById("myLinks");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

</html>
