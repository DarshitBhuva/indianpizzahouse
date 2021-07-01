<?php
    session_start();
    require_once 'config.php';
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
       $title = $_POST['title'];
       $email = $_POST['email'];
       $desc = $_POST['desc'];
       $username = $_SESSION['name'];

       $sql = "INSERT INTO `feedback` ( `username`, `email`, `title`, `feedback`, `time`) VALUES ('$username', '$email', '$title', '$desc', current_timestamp())";
       $result = mysqli_query($conn, $sql);
        if($result)
        {
          echo '<div class="alert alert-success" role="alert">
          Your feedback has been submitted Successfully.
        </div>';
        }
       
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <img src="logo.png" class="my-3" style="display:block; margin:auto; height:250px; width:250px;" alt="">
        <form action="" method="POST">
            <h1 class="text-center">FeedBack</h1>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-12 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" required>
                    <small>Keep Your title as short as possible</small>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-12 col-form-label">Your Login Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-12 col-form-label">Elaborate Your Feedback</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="desc" id="inputPassword3" required></textarea>

                </div>
            </div>

            <input type="submit" class="btn btn-danger" value="Submit">
        </form>
    </div>

    <div class="container">
        <?php
          $sql = "SELECT * FROM feedback";
          $result = mysqli_query($conn, $sql);

          if($result)
          {
              while ($row = mysqli_fetch_assoc($result)) {
                  $title = $row['title'];
                  $feedback =$row['feedback'];
                  $username = $row['username'];
                  $time = $row['time'];
                  echo '<div class="container d-flex align-items-center my-3 py-3">
                    <div class="flex-shrink-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" width="35px" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <b><a class="text-dark" style="text-decoration:none;" href="">' . $title . '</a></b><br>' . $feedback . '
                        <br>
                        <small>Commented By: <b> '. $username .'  | On '.$time .' </b></small>


                    </div>
                </div>';
              }
          }
       ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>