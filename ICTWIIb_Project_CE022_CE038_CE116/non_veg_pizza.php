<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Non Veg Pizza</title>
    <link rel="stylesheet" href="non_veg_pizza1.css">
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
                    <h5 class="display-2">NON-VEG PIZZAS</h5>
                    <p><b>Pizza is like the entire food pyramid!</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pizzaCourser1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">NON-VEG PIZZAS</h5>
                    <p><b>Pizza is like the entire food pyramid!</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pizzaCourser2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">NON-VEG PIZZAS</h5>
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

    <h1 class="text-center">NON-VEG PIZZAS</h1>

    <div class="containers">
        <div class="cards" id="cards1">
            <img src="https://feenix.co.in/wp-content/uploads/2018/02/PepperBarbequeChickenC-1.jpg" alt="">
            <h2>PEPPER BARBECUE CHICKEN</h2>
            <p>Pepper Barbecue Chicken I Cheese</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=PepperChicken" name="button">Order Now</a>
            <a href="cart.php?name=PepperChicken" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards2">
            <img src="https://www.dominos.co.in/files/items/Chicken_Sausage.jpg" alt="">
            <h2>CHICKEN SAUSAGE</h2>
            <p>Chicken Sausage I Cheese</p>
            <b>&#8377;225</b><br><br>
            <a href="order2.php?name=ChickenSausage" name="button">Order Now</a>
            <a href="cart.php?name=ChickenSausage" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards3">
            <img src="https://www.dominos.co.in/files/items/Chicken_Golden_Delight.jpg" alt="">
            <h2>Chicken Golden Delight</h2>
            <p> Mmm! Barbeque chicken with a topping of golden corn loaded with extra cheese. Worth its weight in gold!
            </p>
            <b>&#8377;275</b><br><br>
            <a href="order2.php?name=ChickenGoldenDelight" name="button">Order Now</a>
            <a href="cart.php?name=ChickenGoldenDelight" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards4">
            <img src="https://chefchoice.com.np/wp-content/uploads/2020/07/Non-Veg_Supreme.jpg" alt="">
            <h2>Non Veg Supreme</h2>
            <p>Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri
                Chicken, Grilled Chicken Rashers</p>
            <b>&#8377;199</b><br><br>
            <a href="order2.php?name=NonVegSupreme" name="button">Order Now</a>
            <a href="cart.php?name=NonVegSupreme" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards5">
            <img src="https://5.imimg.com/data5/DM/ES/MY-29540739/chicken-dominator-500x500.png" alt="">
            <h2>Chicken Dominator</h2>
            <p>Treat your taste buds with Double Pepper Barbecue Chicken, Peri-Peri Chicken, Chicken Tikka & Grilled
                Chicken Rashers</p>
            <b>&#8377;210</b><br><br>
            <a href="order2.php?name=ChickenDominator" name="button">Order Now</a>
            <a href="cart.php?name=ChickenDominator" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards6">
            <img src="https://www.dominos.co.in/files/items/Pepper_Barbeque_&_Onion.jpg" alt="">
            <h2>PEPPER BARBECUE & ONION</h2>
            <p>Pepper Barbecue Chicken I Onion</p>
            <b>&#8377;175</b><br><br>
            <a href="order2.php?name=BarbecueAndOnion" name="button">Order Now</a>
            <a href="cart.php?name=BarbecueAndOnion" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards7">
            <img src="https://www.dominos.co.in/files/items/chunky-chicken.png" alt="">
            <h2>CHICKEN FIESTA</h2>
            <p>Grilled Chicken Rashers I Peri-Peri Chicken I Onion I Capsicum</p>
            <b>&#8377;199</b><br><br>
            <a href="order2.php?name=ChickenFiesta" name="button">Order Now</a>
            <a href="cart.php?name=ChickenFiesta" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards8">
            <img src="https://feenix.co.in/wp-content/uploads/2019/03/IndianTandooriChickenTikka.jpg" alt="">
            <h2>Indi Chicken Tikka</h2>
            <p>The wholesome flavour of tandoori masala with Chicken tikka I onion I red paprika I mint mayo</p>
            <b>&#8377;169</b><br><br>
            <a href="order2.php?name=ChickenTikka" name="button">Order Now</a>
            <a href="cart.php?name=ChickenTikka" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards8">
            <img src="https://www.dominos.co.in/files/items/Pepperoni.jpg" alt="">
            <h2>Pepperoni</h2>
            <p>dried oregano, dried basil, crushed red pepper flakes, salt, and pepper</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=Pepperoni" name="button">Order Now</a>
            <a href="cart.php?name=Pepperoni" name="cart" style="background-color:red;border:none;padding:10px;">Add To
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