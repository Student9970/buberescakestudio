<?php

function component($pname, $desc, $price, $image, $id, $cat_name)
{
  echo "
  <form action=\"cart.php\" method=\"POST\">
  <div class=\"col-12\">

    <div class=\"thebox container\">

      <div class=\"item d-flex justify-content-center align-items-center row\">

        <div class=\"itemimage col-6\">
          <img src=\"$image\">
        </div>

        <div class=\"col-2\"></div>

        <div class=\"itemdetails col-4\">
          <h3>$pname</h3>
          <p>$desc</p>
          <h4>&#x20B9; $price</h4>
          <a>
            <button class=\"submitbtn btn btn-success\" name=\"add\">Add to cart</button>
          </a>
          <input type=\"hidden\" name=\"product_id\" value=\"$id\">
          <input type=\"hidden\" name=\"product_cat\" value=\"$cat_name\">
        </div>

      </div>

    </div>

  </div>
  </form>";
}

function cartElement($pname, $desc, $price, $image, $pd_id)
{
  echo "
  <form action=\"cart.php?action=remove&id=$pd_id\" method=\"post\">
  <div class=\"col-12\">

    <div class=\"thebox container\">

      <div class=\"item d-flex justify-content-center align-items-center row\">

        <div class=\"itemimage col-6\">
          <img src=\"$image\">
        </div>

        <div class=\"col-2\"></div>

        <div class=\"itemdetails col-4\">
          <h3>$pname</h3>
          <p>$desc</p>
          <h4>&#x20B9; $price</h4>
          
          <div>
          <input type = \"number\" value =\"1\" id=\"inc\" class = \"form-control d-inline w-25 border my-2\" min=\"1\" max=\"20\">
          </div>
          <a>
            <button class=\"btn btn-danger\" name=\"add\">Remove</button>
          </a>
        </div>

      </div>

    </div>

  </div>
  </form>";
}
