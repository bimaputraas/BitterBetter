<?php
require '../koneksi.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contactform(name,phone,email,message) VALUES('$name','$phone','$email','$message')";

mysqli_query($koneksi,$query);

header('Location: http://localhost/milestone1/register.html');
?>