<?php
session_start();

include 'component.php';
include 'CreateDb.php';
$db = new CreateDb();

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['product_id'] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="./bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <link id="maincss" href="./CSS/style.css" rel="stylesheet" type="text/css" media="screen">

    <link id="products" rel="stylesheet" href="./CSS/products.css" media="screen" type="text/css">

    <title>Bubere's Cake Studio / Cookies</title>
</head>

<body onload="anima();">

    <?php
    include 'loading_animation.php';
    ?>

    <script src="./JS/app.js"></script>
    <!-- ============== NAVBAR ============== -->

    <?php
    include 'navbar.php';
    ?>

    <!-- CART -->

    <?php

    $total = 0;
    if (isset($_SESSION['cart'])) {
        $product_id = array_column($_SESSION['cart'], 'product_id');

        $result = $db->getData($_POST['product_cat']);
        while ($row = mysqli_fetch_assoc($result)) {
            foreach ($product_id as $id) {
                if ($row['id'] == $id) {
                    cartElement($row['product_name'], $row['product_desc'], $row['product_price'], $row['product_image'], $row['id']);
                    $total = $total + (int)$row['product_price'];
                }
            }
        }
    } else {
        echo "<div class='p-5'><strong>Cart is Empty</strong></div>";
    }

    ?>

    <div class="container p-5">
        <h6>PRICE DETAILS</h6>
        <hr>
        <div class="row">
            <div class="col-4">

                <?php
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                    echo "<h6>Price ($count items)</h6>";
                } else {
                    echo "<h6>Price (0 items)</h6>";
                }
                ?>
                <h6>Delivery Charges</h6>
                <hr>
                <h6><strong>Amount Payable</strong></h6>
                <form action="buy.php" method="POST">
                    <a>
                        <button class="btn btn-success" name="add">Buy Now</button>
                    </a>
                </form>
            </div>

            <div class="col-2">

                <h6>
                    $ <?php echo $total; ?>
                </h6>
                <h6 class="text-success">
                    $ 50
                </h6>
                <hr>
                <h6>
                    <strong>$ <?php echo ($total + 50); ?></strong>
                </h6>
            </div>

        </div>
    </div>

    <!-- Footer -->

    <?php
    include 'footer.php';
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>

</html>