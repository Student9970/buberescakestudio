<?php


class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    // class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = "mysql"
    ) {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if (mysqli_query($this->con, $sql)) {

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_desc VARCHAR (100),
                             product_price FLOAT,
                             product_image VARCHAR (100)
                            );";

            if (!mysqli_query($this->con, $sql)) {
                echo "Error creating table : " . mysqli_error($this->con);
            }
        } else {
            return false;
        }

        $cake1 = " 
        CREATE TABLE cakes ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $cake1);

        $cakev = mysqli_query($this->con, "SELECT * FROM cakes WHERE product_name = 'Vanilla Cake'");
        if (mysqli_num_rows($cakev)) {
            return false;
        } else {
            $cake2 = " 
        insert into cakes (product_name, product_desc, product_price, product_image) values ('Butter Scotch Cake', 'Veg | 550g', '350', './images/Cake/Butter_Scotch_Cake.jpg'), ('Cheese Cake', 'Veg | 600g', '400', './images/Cake/cheese_cake.jpg'), ('Chocolate Cake', 'Veg | 500g', '450', './images/Cake/choco_cake.jpg'), ('Mango Cake', 'Veg | 550g', '550', './images/Cake/mango_cake.jpg'), ('Mango Strawberry Cake', 'Includes Egg | 550 g', '350', './images/Cake/mango_strawberry.jpg'), ('Oreo Chocolate Cake', 'NonVeg | 500 g', '350', './images/Cake/oreo_cake.jpg'), ('Rainbow Cake', 'Veg | 1000 g', '600', './images/Cake/rainbow_cake.jpg'), ('Vanilla Cake', 'Veg | 550 g', '350', './images/Cake/vanilla_cake.jpg');";
            mysqli_query($this->con, $cake2);
        }

        $pastry1 = " 
        CREATE TABLE pastries ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $pastry1);

        $pastryv = mysqli_query($this->con, "SELECT * FROM pastries WHERE product_name = 'Vanilla Pastry'");
        if (mysqli_num_rows($pastryv)) {
            return false;
        } else {
            $pastry2 = " 
        insert into pastries (product_name, product_desc, product_price, product_image) values ('Butter Scotch Pastry', '1 Piece', '35', './images/Pastries/butter_scotch_pastry.jpg'), ('Cheese Pastry', '1 Piece', '40', './images/Pastries/cheese_pastry.jpg'), ('Chocolate Pastry', '1 Piece', '45', './images/Pastries/choco_pastry.jpg'), ('Mango Pastry', '1 Piece', '55', './images/Pastries/mango_pastry.jpg'), ('Mango Strawberry Pastry', '1 Piece', '60', './images/Pastries/strawberry_pastry.jpg'), ('Vanilla Pastry', '1 Piece', '40', './images/Pastries/vanilla_pastry.jpg');";
            mysqli_query($this->con, $pastry2);
        }

        $donut1 = " 
        CREATE TABLE donuts ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $donut1);

        $donutv = mysqli_query($this->con, "SELECT * FROM donuts WHERE product_name = 'Sweet Strawberry Donut'");
        if (mysqli_num_rows($donutv)) {
            return false;
        } else {
            $donut2 = " 
        insert into donuts (product_name, product_desc, product_price, product_image) values ('Chocolate Donuts', '3 Pieces', '100', './images/Donuts/choco_donut.jpg'), ('Cinnamon Sugar Donuts', '3 Pieces', '100', './images/Donuts/cinnamon_sugar.jpg'), ('Sweet Strawberry Donut', '3 Pieces', '100', './images/Donuts/strawberry_donut.jpg');";
            mysqli_query($this->con, $donut2);
        }

        $dessert1 = " 
        CREATE TABLE desserts ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $dessert1);

        $dessertv = mysqli_query($this->con, "SELECT * FROM desserts WHERE product_name = 'Strawberry Ice Cream'");
        if (mysqli_num_rows($dessertv)) {
            return false;
        } else {
            $dessert2 = " 
        insert into desserts (product_name, product_desc, product_price, product_image) values ('Chocolate Ice Cream', '500 ML', '350', './images/Dessert/choco_dessert.jpg'), ('Mango Ice Cream', '500 ML', '300', './images/Dessert/mango_dessert.jpg'), ('Oreo Ice Cream', '500 ML', '450', './images/Dessert/oreo_dessert.jpg'), ('Strawberry Ice Cream', '500 ML', '500', './images/Dessert/strawberry_dessert.jpg');";
            mysqli_query($this->con, $dessert2);
        }


        $cookie1 = " 
        CREATE TABLE cookies ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $cookie1);

        $cookiev = mysqli_query($this->con, "SELECT * FROM cookies WHERE product_name = 'Macaroon'");
        if (mysqli_num_rows($cookiev)) {
            return false;
        } else {
            $cookie2 = " 
        insert into cookies (product_name, product_desc, product_price, product_image) values ('Chocolate Chip Cookie', '6 Pieces', '50', './images/Cookies/choco_chip_cookie.jpg'), ('Chocolate Cookie', '6 Pieces', '60', './images/Cookies/chocolate_cookie.jpg'), ('Macaroon', '6 Pieces', '100', './images/Cookies/macaroon.jpg');";
            mysqli_query($this->con, $cookie2);
        }



        $wafer1 = " 
        CREATE TABLE wafers ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $wafer1);

        $waferv = mysqli_query($this->con, "SELECT * FROM wafers WHERE product_name = 'Salted Potato Chips'");
        if (mysqli_num_rows($waferv)) {
            return false;
        } else {
            $wafer2 = " 
        insert into wafers (product_name, product_desc, product_price, product_image) values ('Banana Chips', '500 g', '50', './images/Wafers/Banana_chips.jpg'), ('Nachos', '500 g', '70', './images/Wafers/nachos.jpg'), ('Red Chilli Banana Chips', '500 g', '80', './images/Wafers/pepper_banana_chips.jpg'), ('Salted Potato Chips', '500 g', '30', './images/Wafers/salted_chips.jpg');";
            mysqli_query($this->con, $wafer2);
        }

        $cupcake1 = " 
        CREATE TABLE cupcakes ( `id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(225) NOT NULL , `product_desc` VARCHAR(225) NOT NULL , `product_price` VARCHAR(225) NOT NULL , `product_image` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $cupcake1);

        $cupcakev = mysqli_query($this->con, "SELECT * FROM cupcakes WHERE product_name = 'Strawberry Muffin'");
        if (mysqli_num_rows($cupcakev)) {
            return false;
        } else {
            $cupcake2 = " 
        insert into cupcakes (product_name, product_desc, product_price, product_image) values ('Almond Muffin', '6 Pieces', '60', './images/Muffins/almond_muffin.jpg'), ('Chocolate Muffin', '6 Pieces', '30', './images/Muffins/choco_muffins.jpg'), ('Mawa Muffin', '6 Pieces', '30', './images/Muffins/mawa_muffin.jpg'), ('Strawberry Muffin', '6 Pieces', '60', './images/Muffins/strawberry_muffins.jpg');";
            mysqli_query($this->con, $cupcake2);
        }

        $registration = " 
        CREATE TABLE registration ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(225) NOT NULL , `email` VARCHAR(225) NOT NULL , `mobile` VARCHAR(225) NOT NULL , `password` VARCHAR(225) NOT NULL , `cpassword` VARCHAR(225) NOT NULL, PRIMARY KEY (`id`));";
        mysqli_query($this->con, $registration);

        $contactForm = " 
        CREATE TABLE ContactForm ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(225) NOT NULL , `email` VARCHAR(225) NOT NULL , `query` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";
        mysqli_query($this->con, $contactForm);
    }

    // get product from the database
    public function getData($tablename)
    {
        $sql = "SELECT * FROM $tablename";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}
