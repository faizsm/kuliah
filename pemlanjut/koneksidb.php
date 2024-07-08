<?php
$servername = "localhost";
$database = "crud_faiz";
$username = "root";
$password = "";

// membuat koneksi
$conn = mysqli_connect($servername,$username,$password,$database);
//mengecek koneksi
if (!$conn) {
    die("koneksi gagal :" . mysqli_connect_error());
}

?>