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

  <link rel="stylesheet" href="./CSS/custom.css" media="screen" type="text/css">

  <title>Bubere's Cake Studio / Custom</title>

  <style>
    .back {
      position: fixed;
      background-color: rgba(0, 0, 0, 0.5);
      height: 100vh;
      width: 100vw;
      z-index: 5000;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .popup {
      height: 40%;
      width: 60%;
      background-color: #fff;
      box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .popup img {
      height: 50%;
      width: auto;
    }

    .popup a {
      text-decoration: none;
      color: purple;
    }
  </style>

</head>

<body onload="anima();">

  <script>
    function closepop() {
      document.querySelector(".back").remove();
    }
  </script>

  <?php
  include 'loading_animation.php';
  ?>

  <script src="./JS/app.js"></script>

  <?php

  include 'dbcon.php';

  if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con,  $_POST['name']);
    $number = mysqli_real_escape_string($con,  $_POST['phone']);
    $address = mysqli_real_escape_string($con,  $_POST['address']);
    $type_of_cake = mysqli_real_escape_string($con,  $_POST['option']);

    $query = " insert into custom (name, number, address, option_chosen) values ('$name', '$number', '$address', '$type_of_cake') ";

    mysqli_query($con, $query);

    if ($query) {
  ?>

      <div class="back">
        <div class="popup">
          <img src="./images/tick.png" alt="Image of a tick">
          <h4>Your request has been initiated.<br>We will get in touch with you soon</h4>
          <p><a href="javascript:closepop();">close [x]</a></p>
        </div>
      </div>

  <?php
    }
  }

  ?>

  <!-- ============== NAVBAR ============== -->

  <?php
  include 'navbar.php';
  ?>

  <!-- FORM -->
  <div class="page d-flex justify-content-center align-items-center">

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">

      <div class="container">

        <div class="row">

          <div class="col-md-4 d-flex justify-content-center align-items-center flex-column formbody imgsection">

            <img id="cakelogo" src="./images/custom1.jpg" alt="cake logo">
            <div>
              <h2>Custom Cake</h2>
            </div>

          </div>

          <div class="col-md-4 d-flex justify-content-center align-items-center flex-column formbody">

            <div class="form-item">

              <label style="font-weight: bold;" for="name">Full Name</label>
              <input name="name" class="labels py-1 px-1 my-2" type="text" id="name" placeholder="Name" required>

            </div>


            <div class="form-item">

              <label style="font-weight: bold;" for="phone">Contact number</label>
              <input name="phone" class="labels py-1 px-1 my-2" type="text" id="phone" placeholder="Number" required>

            </div>

            <div class="form-item">

              <label style="font-weight: bold;" for="address">Delivery Address</label>
              <input name="address" class="labels py-1 px-1 my-2" type="text" id="address" placeholder="Address" required>

            </div>


          </div>

          <div class="col-md-4 d-flex justify-content-center align-items-center flex-column formbody">

            <div class="form-item d-flex justify-content-center align-items-center flex-column">

              <div class="d-flex select my-2">
                <label class="d-flex flex-start" for="option"><b>Anniversary</b></label>
                <input name="option" class="frm d-flex flex-end" type="radio" value="Anniversary">
              </div>

              <div class="d-flex select my-2">
                <label class="d-flex flex-start" for="option"><b>Kids Birthday</b></label>
                <input name="option" class="frm d-flex flex-end" type="radio" value="Kids Birthday">
              </div>

              <div class="d-flex select my-2">
                <label class="d-flex flex-start" for="option"><b>Celebration Cakes</b></label>
                <input name="option" class="frm d-flex flex-end" type="radio" value="Celebration Cakes">
              </div>

              <div class="d-flex select my-2">
                <label class="d-flex flex-start" for="option"><b>Photo Cake</b></label>
                <input name="option" class="frm d-flex flex-end" type="radio" value="Photo Cake">
              </div>

            </div>

            <div style="background-color: red;" class="form-item d-flex justify-content-start">

              <button type="submit" name="submit" class="btn btn-success mysubbtn">Submit</button>

            </div>

          </div>

        </div>

      </div>

    </form>
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