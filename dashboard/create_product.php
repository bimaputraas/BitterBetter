<?php
require '../koneksi.php';

$name = $_POST['name'];
$price = $_POST['price'];
$img = $_POST['img'];

$query = "INSERT INTO products(name,price,img) VALUES('$name','$price','$img')";

mysqli_query($koneksi,$query);

header('Location: http://localhost/milestone1/dashboard/products.php');

?>