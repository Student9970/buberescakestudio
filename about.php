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
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link activelink" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" onclick="modeChangea();" id = "modeChanger">Dark Mode</a>
              </li>
            </ul>
            <form action="login.php">
              <button>Log In</button>
            </form>
          </div>
        </div>
      </nav>

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