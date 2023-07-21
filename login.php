<?php
require 'koneksi.php';

$email1 = $_POST['email'];
$password1 = $_POST['password'];

$query = "SELECT * FROM members WHERE email='$email1' AND password= '$password1' ";

$result = mysqli_query($koneksi,$query);

if (mysqli_num_rows($result) > 0){
    header('Location: http://localhost/milestone1/dashboard/index.html');
}
else {
    echo "<script>alert('Email atau password anda salah, silahkan login kembali')</script>";
}
?>