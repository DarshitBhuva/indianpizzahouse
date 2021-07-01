<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Mania</title>
    <link rel="stylesheet" href="pizza_mania2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<style>
.cards b {
    color: rgb(252, 235, 0);
    font-size: 20px;
}
</style>

<body>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pizzaCourser3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">PIZZA MANIA</h5>
                    <p><b>Pizza is like the entire food pyramid!</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pizzaCourser1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">PIZZA MANIA</h5>
                    <p><b>Pizza is like the entire food pyramid!</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pizzaCourser2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">PIZZA MANIA</h5>
                    <p><b>Pizza is like the entire food pyramid!</b></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="text-center">PIZZA MANIA</h1>
    <div class="containers">
        <div class="cards" id="cards1">
            <img src="https://www.dominos.co.in/files/items/pizza_mania_tomato.png" alt="">
            <h2>Tomato</h2>
            <p>juicy tomato in a flavourful combination with cheese I tangy sauce</p>
            <b>&#8377;59</b><br><br>
            <a href="order2.php?name=Tomato" name="button">Order Now</a>
            <a href="cart.php?name=Tomato" name="cart" style="background-color:red;border:none;padding:10px;">Add To
                Cart</a><br><br>

        </div>
        <div class="cards" id="cards2">
            <img src="https://www.dominos.co.in/files/items/PrimeLoadedL.jpg" alt="">
            <h2>Veg Loaded</h2>
            <p>Tomato | Grilled Mushroom |Jalapeno |Golden Corn | Beans in a fresh pan crust</p>
            <b>&#8377;135</b><br><br>
            <a href="order2.php?name=VegLoaded" name="button">Order Now</a>
            <a href="cart.php?name=VegLoaded" name="cart" style="border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards3">
            <img src="https://www.dominos.co.in/files/items/PrimeCheesyL.jpg" alt="">
            <h2>Cheesy</h2>
            <p>Orange Cheddar Cheese I Mozzarella</p>
            <b>&#8377;99</b><br><br>
            <a href="order2.php?name=Cheesy" name="button">Order Now</a>
            <a href="cart.php?name=Cheesy" name="cart" style="border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards4">
            <img src="https://www.dominos.co.in/files/items/CapsicumVeg.jpg" alt="">
            <h2>Capcicum</h2>
            <p>Capcicum</p>
            <b>&#8377;75</b><br><br>
            <a href="order2.php?name=Capcicum" name="button">Order Now</a>
            <a href="cart.php?name=Capcicum" name="cart" style="border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards5">
            <img src="https://www.dominos.co.in/files/items/onion_veg.jpg" alt="">
            <h2>Onion</h2>
            <p>Onion</p>
            <b>&#8377;59</b><br><br>
            <a href="order2.php?name=Onion" name="button">Order Now</a>
            <a href="cart.php?name=Onion" name="cart" style="border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards6">
            <img src="https://www.dominos.co.in/files/items/golden_corn_veg.jpg" alt="">
            <h2>Golden Corn</h2>
            <p>Golden Corn</p>
            <b>&#8377;79</b><br><br>
            <a href="order2.php?name=GoldenCorn" name="button">Order Now</a>
            <a href="cart.php?name=GoldenCorn" name="cart" style="border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards7">
            <img src="https://www.dominos.co.in/files/items/Paneer_Special.jpg" alt="">
            <h2>Paneer & Onion</h2>
            <p>Creamy Paneer I Onion</p>
            <b>&#8377;95</b><br><br>
            <a href="order2.php?name=PaneerAndOnion" name="button">Order Now</a>
            <a href="cart.php?name=PaneerAndOnion" name="cart" style="border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards8">
            <img src="https://www.dominos.co.in/files/items/cheese_and_tomato.png" alt="">
            <h2>Cheese and Tomato</h2>
            <p>A delectable combination of cheese and juicy tomato</p>
            <b>&#8377;99</b><br><br>
            <a href="order2.php?name=CheeseAndTomato" name="button">Order Now</a>
            <a href="cart.php?name=CheeseAndTomato" name="cart" style="border:none;padding:10px;">Add To
                Cart</a><br><br>
        </div>
    </div>

    <footer>
        <div class="center">
            copyright &copy; pizzahouse.atwebpages.com <br> All rights reserved
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>