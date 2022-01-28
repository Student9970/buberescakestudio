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

  <link id="contacts" rel="stylesheet" href="./CSS/contact.css" media="screen" type="text/css">

  <title>Bubere's Cake Studio / Contact</title>
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

  <!-- CONTACT FORM -->

  <section id="contact">
    <div class="contact-box">
      <div class="contact-links">
        <h2>CONTACT</h2>
        <div class="links">
          <div class="link">
            <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
          </div>
          <div class="link">
            <a><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
          </div>
          <div class="link">
            <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
          </div>
          <div class="link">
            <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
          </div>
        </div>
      </div>
      <div class="contact-form-wrapper">
        <form action="userinfo.php" method="post">
          <div class="form-item">
            <input type="text" name="sender" required="">
            <label>Name:</label>
          </div>
          <div class="form-item">
            <input type="text" name="email" required="">
            <label>Email:</label>
          </div>
          <div class="form-item">
            <textarea class="" name="message" required=""></textarea>
            <label>Query:</label>
          </div>
          <button class="submit-btn">Send</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <?php
  include 'footer.php';
  ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>

</html>