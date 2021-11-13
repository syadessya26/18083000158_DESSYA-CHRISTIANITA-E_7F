<?php

require 'koneksi.php';

$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

//pengecekan kelengkapan data
if (empty($name) || empty($username) || empty($password)) {
    header("location: register.php");
} else {
    mysqli_query($koneksi, "INSERT INTO user(name, username, password) VALUES ('$name', '$username', '$password')");
    header("location: index.php");
}
