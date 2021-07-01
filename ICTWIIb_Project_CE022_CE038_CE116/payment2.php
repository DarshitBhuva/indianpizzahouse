<?php
session_start();
$error = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "order_data";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn == false) {
        die("error ") . mysqli_connect_error();
    }

    $pizza = $_SESSION['quality'];
    $quantity =  $_SESSION['quantity'];
    $size = $_SESSION['size'];
    $address = $_SESSION['address'];
    $payment = $_SESSION['payment'];
    $cardHolder = trim($_POST['card']);
    $card_number = $_POST['card_number'];
    $month = trim($_POST['month']);
    $year = trim($_POST['year']);
    $cvv = trim($_POST['cvv']);
    $user = $_SESSION['name'];

    if (empty($cardHolder)) {
        $error = "Please Enter Card Holder Name.";
    } elseif (!filter_var($cardHolder, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $error = "Please Enter a Valid Card Holder Name.";
    }

    $len = strlen($card_number);
    if ($len != 16) {
        $error = "Please Enter a Valid Card Number.";
    } elseif (!ctype_digit($card_number)) {
        $error = "Only numbers are allowed in Card Number.";
    }

    $current_year = date("y");
    $current_month = date('m');
    if ($current_year > $year) {
        $error = "Your card might be expired.";
    } elseif ($current_year == $year) {
        if ($current_month > $month) {
            $error = "Your card might be expired.";
        }
    }

    if (strlen($cvv) != 3) {
        $error = "Your CVV is not Valid.";
    }

    if ($error == FALSE) {
        $_SESSION['error'] == FALSE;
        $sql = "INSERT INTO `customer` (`pizza`, `User`, `quantity`, `size`, `address`, `cardHolder`, `card_number`, `Payment`) VALUES ('$pizza', '$user', '$quantity', '$size', '$address', '$cardHolder', '$card_number', '$payment')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['number'] = $card_number;
            echo "<script>window.location = 'bill.php'</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="payment2.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@500&display=swap" rel="stylesheet">
    <!-- Awesome Font Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php

    if ($error != false) {
        echo '<div class="error"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;&nbsp;' . $error . '</div>';
    }

    ?>
    <div class="container">
        <!-- <div class="logo"><span>P</span></div> -->
        <div class="payment">
            <div class="logo"><span>P</span></div>
            <form action="" method="post">
                <h1>Payment Gateway</h1>
                <div class="card">
                    <label for="holder">Card&nbsp;Holder:</label><br>
                    <div class="border">
                        <i class="fas fa-user"></i>
                        <input type="text" name="card" required><br>
                    </div>
                </div>
                <div class="card">
                    <label for="holder">Card&nbsp;Number:</label><br>
                    <div class="border">
                        <i class="far fa-credit-card"></i>
                        <input type="text" name="card_number" placeholder="0000 0000 0000" required>
                    </div>
                </div>
                <div class="card">
                    <label for="holder">Expiry&nbsp;Date:</label><br>
                    <div class="border">
                        <i class="far fa-calendar-alt"></i>
                        <!-- <input type="month" name="Expiry" pattern="[0-9]{4}-[0-9]{2}" placeholder="mm/yyyy"> -->
                        <select id="month" name="month" required>
                            <option selected value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <span>
                            <select id="year" name="year" required>
                                <option value="21">2021</option>
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                                <option value="28">2028</option>
                                <option value="29">2029</option>
                                <option value="30">2030</option>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <label for="holder">CVV:</label><br>
                    <div class="border">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="cvv" placeholder="000" required>
                    </div>
                </div>
                <input type="submit" value="Pay Now">
            </form>
        </div>
    </div>
</body>

</html>