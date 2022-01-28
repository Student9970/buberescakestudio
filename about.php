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

  <link id="maincss" href="./CSS/Style.css" rel="stylesheet" type="text/css" media="screen">

  <link id="about" rel="stylesheet" href="./CSS/about.css" media="screen" type="text/css">

  <title>Bubere's Cake Studio / About</title>
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

  <!-- ABOUT US -->

  <div class="pg1">
    <div class="coloured"></div>

    <div class="main">

      <div class="container maincontainer">
        <div class="row">

          <div class="col-12 col-md-7 txtarea">
            <h2>Bubere's Cake Studio</h2>
            <p>
              We are committed to using fresh, high end, local ingredients and proudly serve locally roasted Joe Van Gogh coffee and espresso. The shop boasts a beautiful, light filled cafe where you can enjoy a croissant warm from the oven with your espresso, or you can take your treats to our patio and enjoy the outdoors with your dessert both day and night.<br>

              Here at the shop we believe in small batch baking and providing top quality sweets and pastries with no shortcuts and our open kitchen concept allows visitors to watch our staff at work. Whether piping away on a tray of freshly baked cupcakes, or mixing up a homemade batch of cookies, the shop is both a delight for the young and old. We also have vegan/gluten free options on our menu and a full coffee and espresso bar!<br>

              So whether a birthday, a dinner party, a wedding or shower, let us help you cater your next special event!
            </p>
          </div>

        </div>
        <div class="col col-md-5 bakery">
          <img src="./images/bakery.png" alt="Illustration of a bakery">
        </div>

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