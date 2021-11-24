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
  <body>

  <script src="./JS/app.js"></script>

<!-- ============== NAVBAR ============== -->

<nav class="mynav navbar navbar-expand-lg navbar-light"> 
        <div class="container-fluid">
          <div class="mylogo">
          <a class="navbar-brand" href="index.php">Bubere's Cake Studio</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navli collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#products">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link activelink" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" onclick="modeChangec();" id = "modeChanger">Dark Mode</a>
              </li>
            </ul>
            <form action="login.php">
              <button>Log In</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- ABOUT US -->

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

<div class="myfooter">
  <div class="container">
    <div class="row">
  
      <!-- Feedback Col -->

      <div class="col-12 col-sm-12 col-md-4 feedback d-flex justify-content-center align-items-center">
        <div class="your-feedback">
          <h3>Your&nbsp;Feedback</h3>
        </div>
        <div class="myform d-flex justify-content-center align-items-center">
          <form>
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="email" placeholder="Email">
            <input name="feedback" type="text" placeholder="Feedback"><br>
            <input class="mybutton" type="button" value="submit">
          </form>
        </div>
      </div>

      <!-- NameTag Col -->

      <div class="col-12 col-sm-12 col-md-4 name-tag d-flex justify-content-center align-items-center">
        <div class="names d-flex justify-content-center align-items-center">
          <h3>Bubere's<br>Cake<br>Studio</h3>
        </div>
      </div>

      <!-- Social Col  -->

      <div class="col-12 col-sm-12 col-md-4 connect d-flex justify-content-center align-items-center">

        <div class="social-links d-flex justify-content-center align-items-end">
          <a class="insta" href="https://www.instagram.com/" target="_blank">Instagram</a>
          <a class="twitter" href="https://twitter.com/" target="_blank">Twitter</a>
          <a class="fb" href="https://www.facebook.com/" target="_blank">Facebook</a>
          <a class="youtube" href="https://www.youtube.com/" target="_blank">Youtube</a>
        </div>

        <div class="connect-with-us d-flex justify-content-center align-items-center">
          <h3>Connect</h3>
        </div>
      </div>
      
    </div>
    <div class="copyright d-flex justify-content-center align-items-center">
      <h6>Copyright <small>&copy;</small> Bubere's Cake Studio</h6>
    </div>
  </div>
</div>
      
      <!-- Optional JavaScript; choose one of the two! -->
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  
    </body>
    
  </html>