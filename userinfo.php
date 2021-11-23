<?php

$password = 'mysql';

$con = mysqli_connect('localhost','root',$password);

mysqli_select_db($con, 'BuberesCakeStudio');


$sender = $_POST['sender'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into ContactForm (name, email, query) values ('$sender', '$email', '$message') ";

mysqli_query($con, $query);

header('location:contact.php')

?>