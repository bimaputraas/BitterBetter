<?php
require 'koneksi.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO members(name,phone,email,password) VALUES('$name','$phone','$email','$password')";

mysqli_query($koneksi,$query);


header('Location: http://localhost/milestone1/register.html');
?>