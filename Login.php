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

    <link id="maincss" href="./CSS/login.css" rel="stylesheet" type="text/css" media="screen">

    <title>Bubere's Cake Studio / Login</title>
  </head>
  <body>

  <script>
    function close(){
      var myobj = document.querySelector(".parent");
      var todel = document.querySelector(".alert");
      myobj.removeChild(todel);
    }
  </script>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $emailSearch = " select * from registration where email='$email' ";
  $query = mysqli_query($con, $emailSearch);
  $email_count = mysqli_num_rows($query);

  if($email_count){
    $email_pass = mysqli_fetch_assoc($query);

    $dbpass = $email_pass['password'];

    $_SESSION['username'] = $email_pass['username'];

    $pass_decode = password_verify($password, $dbpass);

    if($pass_decode){
      header('location:index.php');
    }else{
      echo "<div class='parent'><div class='alert d-flex' style='background: #000; color:red;'><strong>Incorrect Password</strong><div class='ms-auto'><a style='text-decoration:none; color: #fff' href='javascript:close();'>Close [x]</a></div></div></div>";
    }

  }else{
    echo "<div class='parent'><div class='alert d-flex' style='background: #000; color:red;'><strong>Invalid Email</strong><div class='ms-auto'><a style='text-decoration:none; color: #fff' href='javascript:close();'>Close [x]</a></div></div></div>";
  }

}

?>

<div class="main container">

    <div class="row">

        <form class="wdt" action="index.php">
          <button type="submit" class="wdt my-1 fb p-2"> <- Back to Home</button>
        </form>

        <div class="box ms-auto me-auto my-5 d-flex align-items-center flex-column col-12 col-md-4 ">
          <div class="texts wdt py-3 d-flex justify-content-center align-items-center flex-column">
            <h3>Log in</h3>
            <p>Get started with your free account</p>
          </div>

          <div class="wdt d-flex justify-content-center align-items-center flex-column">
            <form class="wdt" action="google.php">
                <button type="submit" class="my-1 p-2 wdt gmail">Login via Gmail</button>
            </form>
          
            <form class="wdt" action="facebook.php">
              <button type="submit" class="wdt my-1 fb p-2">Login via Facebook</button>
            </form>
          </div>

            <div class="or wdt d-flex justify-content-center align-items-center flex-column my-2">OR</div>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" class="wdt d-flex justify-content-center align-items-center flex-column">

              <div class="form-item wdt">
                <input style="border: 1px solid; border-radius: 5px;" class="frm wdt py-1 px-2 my-1" type="email" name="email" placeholder="Email" required>
              </div>

              <div class="form-item wdt">
                <input style="border: 1px solid; border-radius: 5px;" class="frm wdt py-1 px-2 my-1" type="password" name="password" placeholder="Password" required>
              </div>

              <button type="submit" name="submit" class="wdt my-1 p-2 subbtn">Log In</button>
            </form>
        
          <div class="wdt d-flex justify-content-center align-items-center flex-column">
            <p>Don't have an account? <a href="SignUp.php">Sign up</a></p>
          </div>
      </div>

    </div>
</div> 

      <!-- Optional JavaScript; choose one of the two! -->
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  
    </body>
    
  </html>