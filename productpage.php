<?php
        
        function product($image, $name, $price){
            ?>

            <div class="mainpage">

                <div class="container">

                <div class="row">

                    <div class="col-12 col-md-4">
                        <img src="<?php echo $image ?>" alt="Image of Cake">
                    </div>

                    <div class="col col-md-4 d-flex flex-column">
                        <h1><?php $name ?></h1>
                        <form class="weights d-flex justify-content-center align-items-center flex-column">
                            <div class="d-flex">
                                <label>1/2 kg</label>
                                <input type="radio" name="weight" value="1/2 kg">
                            </div>
                            <div class="d-flex">
                                <label>1/2 kg</label>
                                <input type="radio" name="weight" value="1/2 kg">
                            </div>
                            <div class="d-flex">
                                <label>1/2 kg</label>
                                <input type="radio" name="weight" value="1/2 kg">
                            </div>
                        <h3>$price</h3>

                        <button class="btn btn-success">Buy Now!</button>
                        </form>
                    </div>

                    <div class="col col-md-4 d-flex flex-column">                            
                                
                        <h6>Safe & Hygenic<br>Bakery</h6>
                        <h6>Quality Guarantee<br>Assurance</h6>
                        <h6>Same Day Delivery<br>Available</h6>
                        <h6>Midnight Delivery<br>Available</h6>

                    </div>

                </div>
                </div>

            </div>

            <?php
        }

        ?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>

</html>