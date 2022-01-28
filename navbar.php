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
                    <a class="nav-link activelink active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:modeChange();" id="modeChanger">Dark Mode</a>
                </li>
            </ul>

            <form id="lform" class="lform" action="login.php">
                <button id="ltbn" style="border:none; margin-bottom: 5px; background: #BB001B;" type="submit" class="btn btn-success lbtn">Log In</button>
            </form>

            <div>
                <?php
                if (isset($_SESSION['username'])) {
                ?>
                    <div><strong><?php echo $_SESSION['username'] ?></strong></div>
                <?php
                }
                ?>
            </div>

            <form id="sform" class="sform" action="SignUp.php">
                <button id="stbn" style="border:none; background: #4285F4; margin-bottom: 5px; color:#fff;" type="submit" class="btn btn-succes mx-md-2 sbtn">Sign Up</button>
            </form>

            <a href="cart.php" class="nav-item nav-link active">

                <span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-shopping" class="svg-inline--fa fa-cart-shopping" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"></path>
                    </svg>
                </span>

                <?php

                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                    echo "<span id=\"cart_count\" class=\"text-warning\">$count</span>";
                } else {
                    echo "<span id=\"cart_count\" class=\"text-warning\">0</span>";
                }

                ?>

            </a>

        </div>
    </div>
</nav>

<?php

if (isset($_SESSION['username'])) {

?>

    <script>
        var loginbtn = document.querySelector(".lbtn").style.cssText = "opacity:0;";

        // loginbtn.remove();
        document.querySelector(".sbtn").innerHTML = "Logout";
        document.querySelector(".sform").setAttribute("action", "Logout.php");
    </script>

<?php
}

?>