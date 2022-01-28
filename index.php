<?php

session_start();

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

  <title>Bubere's Cake Studio</title>
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

  <!-- ============== CAROUSEL ============== -->

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/Half Chocolate Cake.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item d-flex justify-content-center align-items-center">
        <img src="./images/Mango Cake.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/PinkCake.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <?php
  include 'CreateDb.php';
  $database = new CreateDb("BCS", "products");
  ?>

  <!-- Featured Categories -->

  <div class="heading container d-flex align-items-center justify-content-center" id="products">
    <h3>Featured Categories</h3>
    <div class="lined"></div>
  </div>

  <div class="container">

    <div class="row">

      <!-- 1 -->
      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="cakes.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/Mango Cake.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Cakes</div>
          </div>
        </a>

      </div>

      <!-- 2 -->

      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="pastries.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/Pink Pastry.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Pastries</div>
          </div>
        </a>

      </div>

      <!-- 3 -->

      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">
        <a href="donuts.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/donut.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Donuts</div>
          </div>
        </a>

      </div>

      <!-- 4 -->

      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="desserts.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/desserts.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Desserts</div>
          </div>
        </a>

      </div>

    </div>

    <div class="row">

      <!-- 1 -->
      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="cookies.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/cookie.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Cookies</div>
          </div>
        </a>

      </div>

      <!-- 2 -->

      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="wafers.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/wafer.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Wafers</div>
          </div>
        </a>

      </div>

      <!-- 3 -->

      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="cupcakes.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/cupcake.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Cup Cakes</div>
          </div>
        </a>

      </div>

      <!-- 4 -->

      <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center category">

        <a href="custom.php" class="cat-links">
          <div class="box">
            <div class="img d-flex justify-content-center align-items-center">
              <div class="image d-flex justify-content-center align-items-center">
                <img class="hov_image" src="./images/custom.jpg">
              </div>
            </div>
            <div class="name d-flex justify-content-center align-items-center">Custom Cake</div>
          </div>
        </a>

      </div>

    </div>

  </div>

  <!-- Visit Us -->

  <div class="heading container d-flex align-items-center justify-content-center">
    <h3>Visit Us</h3>
    <div class="lined"></div>
  </div>

  <div class="container visit d-flex justify-content-center align-items-center">

    <div class="row sec">
      <div class="col-12 map">
        <div class="embed">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.7015008408966!2d73.0494286139951!3d19.295342886962466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bd056f40e2b9%3A0x820db238c53d3e67!2sMasood%20Fakih%20Saheb%20Rd%2C%20Goripada%2C%20Bhiwandi%2C%20Maharashtra%20421302!5e0!3m2!1sen!2sin!4v1635687105277!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="col-12 address d-flex justify-content-center align-items-center">
        <h2>Visit Us</h2>
        <p style="text-align: center;">Shop No. 56, Lane 1, P.G. Street<br>Thana Road, Bhiwandi<br>Thane 421-302</p>
        <a href="https://www.google.com/maps/dir//Candle+cafe,+Candle+cafe+,+old+gauri+pada+Near+sahil+hotel+,+dhobi+talab+stadium,+Bhiwandi,+Maharashtra+421302/@19.2956631,73.0498706,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be7bd7d5dea4223:0x52ab133927a4ec80!2m2!1d73.0520593!2d19.2956631" target="_blank">
          <div class="btn mybtn">Get Directions</div>
        </a>
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