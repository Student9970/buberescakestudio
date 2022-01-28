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

  <title>Bubere's Cake Studio / Cakes</title>
</head>

<body onload="anima();">

  <?php
  session_start();
  include 'loading_animation.php';
  ?>

  <script src="./JS/app.js"></script>

  <!-- ============== NAVBAR ============== -->

  <?php
  include 'navbar.php';
  ?>

  <!-- SHOP CAKES -->

  <div class="shopcakes container d-flex align-items-center justify-content-center">
    <h3>Shop Cakes</h3>
    <div class="lined"></div>
  </div>

  <!-- PRODUCTS -->

  <div class="container my-5">

    <div class="row">

      <?php

      if (isset($_POST['add'])) {
        if (isset($_SESSION['cart'])) {

          $item_array_id = array_column($_SESSION['cart'], 'product_id');

          if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product already in cart!');</script>";
          } else {

            $count = count($_SESSION['cart']);

            $item_array = array(
              'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
          }
        } else {

          $item_array = array(
            'product_id' => $_POST['product_id']
          );

          $_SESSION['cart'][0] = $item_array;
        }
      }

      include 'component.php';
      include 'CreateDb.php';
      $database = new CreateDb();
      $result = $database->getData("cakes");
      while ($row = mysqli_fetch_assoc($result)) {
        component($row['product_name'], $row['product_desc'], $row['product_price'], $row['product_image'], $row['id'], "cakes");
      }

      ?>

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