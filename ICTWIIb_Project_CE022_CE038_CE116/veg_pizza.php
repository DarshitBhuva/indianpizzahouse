<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veg PIzza</title>
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="veg_pizza2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!-- Coursers -->
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
                    <h5 class="display-2">VEG PIZZAS</h5>
                    <p><b>Do good. Be nice. Order pizza. Repeat.</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pizzaCourser1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">VEG PIZZAS</h5>
                    <p><b>Do good. Be nice. Order pizza. Repeat.</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pizzaCourser2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-2">VEG PIZZAS</h5>
                    <p><b>Do good. Be nice. Order pizza. Repeat.</b></p>
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

    <h1 class="text-center">VEG-PIZZAS</h1>
    <div class="containers">
        <div class="cards" id="cards1">
            <img src="https://www.dominos.co.in/files/items/Margherit.jpg" alt="">
            <h2>Margherita</h2>
            <p>A hugely popular margherita, with a deliciously tangy single cheese topping</p>
            <b>&#8377;99</b><br><br>
            <a href="order2.php?name=Margherita" name="button">Order Now</a>
            <a href="cart.php?name=Margherita" name="cart" style="background-color:red;border:none;padding:10px;">Add To
                Cart</a><br><br>
        </div>
        <div class="cards" id="cards2">
            <img src="https://feenix.co.in/wp-content/uploads/2018/02/double_cheese_margherita.jpg" alt="">
            <h2>Double Cheese Margherita</h2>
            <p>The ever-popular Margherita - loaded with extra cheese... oodies of it!</p>
            <b>&#8377;185</b><br><br>
            <a href="order2.php?name=DoubleCheeseMargherita" name="button">Order Now</a>
            <a href="cart.php?name=DoubleCheeseMargherita" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards3">
            <img src="https://www.dominos.co.in/files/items/Farmhouse.jpg" alt="">
            <h2>Farm House</h2>
            <p>A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp
                capsicum, succulent mushrooms and fresh tomatoes</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=FarmHouse" name="button">Order Now</a>
            <a href="cart.php?name=FarmHouse" name="cart" style="background-color:red;border:none;padding:10px;">Add To
                Cart</a><br><br>
        </div>
        <div class="cards" id="cards4">
            <img src="https://www.dominos.co.in/files/items/Peppy_Paneer.jpg" alt="">
            <h2>Peppy Paneer</h2>
            <p>Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=PeppyPaneer" name="button">Order Now</a>
            <a href="cart.php?name=PeppyPaneer" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards5">
            <img src="https://5.imimg.com/data5/TJ/GN/MY-29540739/mexican-green-wave-500x500.png" alt="">
            <h2>Mexican Green Wave</h2>
            <p>A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling
                of exotic Mexican herbs.</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=MexicanGreenWave" name="button">Order Now</a>
            <a href="cart.php?name=MexicanGreenWave" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards6">
            <img src="https://www.dominos.co.in/files/items/Deluxe_Veggie.jpg" alt="">
            <h2>Deluxe Veggie</h2>
            <p>For a vegetarian looking for a BIG treat that goes easy on the spices, this one's got it all.. The
                onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.</p>
            <b>&#8377;235</b><br><br>
            <a href="order2.php?name=DeluxeVeggie" name="button">Order Now</a>
            <a href="cart.php?name=DeluxeVeggie" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards7">
            <img src="https://www.dominos.co.in/files/items/Veg_Extravaganz.jpg" alt="">
            <h2>Veg Extravaganza</h2>
            <p>A pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions,
                crisp capsicum, succulent mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese to go all
                around.</p>
            <b>&#8377;235</b><br><br>
            <a href="order2.php?name=VegExtravaganza" name="button">Order Now</a>
            <a href="cart.php?name=VegExtravaganza" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards8">
            <img src="https://www.dominos.co.in/files/items/Corn_&_Cheese.jpg" alt="">
            <h2>CHEESE N CORN</h2>
            <p>Cheese I Golden Corn</p>
            <b>&#8377;165</b><br><br>
            <a href="order2.php?name=CheeseAndOnion" name="button">Order Now</a>
            <a href="cart.php?name=CheeseAndOnion" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards9">
            <img src="https://www.dominos.co.in/files/items/Paneer_Makhni.jpg" alt="">
            <h2>PANEER MAKHANI</h2>
            <p>Paneer and Capsicum on Makhani Sauce</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=PaneerMakhani" name="button">Order Now</a>
            <a href="cart.php?name=PaneerMakhani" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards10">
            <img src="https://www.dominos.co.in/files/items/Digital_Veggie_Paradise_olo_266x265.jpg" alt="">
            <h2>VEGGIE PARADISE</h2>
            <p>Goldern Corn, Black Olives, Capsicum & Red Paprika</p>
            <b>&#8377;215</b><br><br>
            <a href="order2.php?name=VeggieParadise" name="button">Order Now</a>
            <a href="cart.php?name=VeggieParadise" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
        </div>
        <div class="cards" id="cards11">
            <img src="https://www.dominos.co.in/files/items/Fresh_Veggie.jpg" alt="">
            <h2>FRESH VEGGIE</h2>
            <p>Onion I Capsicum</p>
            <b>&#8377;185</b><br><br>
            <a href="order2.php?name=FreshVeggie" name="button">Order Now</a>
            <a href="cart.php?name=FreshVeggie" name="cart" style="background-color:red;border:none;padding:10px;">Add
                To Cart</a><br><br>
        </div>
        <div class="cards" id="cards12">
            <img src="https://feenix.co.in/wp-content/uploads/2019/03/IndianTandooriPaneer.jpg" alt="">
            <h2>Indi Tandoori Paneer</h2>
            <p>It is hot. It is spicy. It is oh-so-Indian. Tandoori paneer with capsicum I red paprika I mint mayo</p>
            <b>&#8377;235</b><br><br>
            <a href="order2.php?name=TandooriPaneer" name="button">Order Now</a>
            <a href="cart.php?name=TandooriPaneer" name="cart"
                style="background-color:red;border:none;padding:10px;">Add To Cart</a><br><br>
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