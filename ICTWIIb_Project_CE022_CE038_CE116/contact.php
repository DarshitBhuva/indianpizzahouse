<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <img src="logo.png" class="my-3" style="display:block;margin:auto;height:200px;width:200px;" alt="">
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col cards">
                <div class="card h-100">
                    <img src="my_image.jpeg" style="height: 200px; width: 150px; margin: auto;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Darshit Bhuva</h5>
                        <p class="card-text">Founder Of Indian Pizza House</p>
                        <p class="card-text"><b>Email: </b>darshitbhuva9330@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="col cards">
                <div class="card h-100">
                    <img src="pavan.jpeg" style="height: 200px; width: 180px; margin: auto;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pavan Gadhiya</h5>
                        <p class="card-text">Co-Founder Of Indian Pizza House</p>
                        <p class="card-text"><b>Email: </b>pavangadhiya06@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col cards">
                <div class="card h-100">
                    <img src="harsh.jpeg" style="height: 200px; width: 170px; margin: auto;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Harsh Sojitra</h5>
                        <p class="card-text">Co-Founder Of Indian Pizza House</p>
                        <p class="card-text"><b>Email: </b>hp115081@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container1" style="width:50%">
        <h1 class="text-center">Contact Us</h1>
        <form action="https://formspree.io/f/xnqldlgp" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="formGroupExampleInput" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="formGroupExampleInput2" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Mobile Number:</label>
                <input type="number" class="form-control" name="number" id="formGroupExampleInput2" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Elaborate Your Concern</label>
                <textarea class="form-control" name="concern" id="formGroupExampleInput2" required></textarea>
            </div>

            <input type="submit" value="Submit" class="btn btn-danger my-3">
        </form>
    </div>
    <footer>
        <div class="text-center bg-danger text-light">
            <div class="contact text-center">
                <a href="https://www.facebook.com/Darshit.bhuva.75" class="fb" target="_blank"><i
                        class="fa fa-facebook icon" id="facebook"></i></i></a>
                <a href="https://www.instagram.com/darshit.bhuva/" class="insta" target="_blank"><i
                        class="fa fa-instagram icon"></i></i></a>
                <a href="https://bit.ly/3eIgLvS" class="whatsapp" target="_blank"><i
                        class="fa fa-whatsapp icon"></i></i></a>
                <a href="https://www.linkedin.com/in/darshit-bhuva-7b04b3204/" class="linkedin" target="_blank"><i
                        class="fa fa-linkedin icon"></i></i></a>
            </div>
            <div style="font-size:20px;">copyright &copy; pizzahouse.atwebpages.com <br> All rights reserved</div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>