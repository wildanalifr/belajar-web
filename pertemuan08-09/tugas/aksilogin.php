<?php

session_start();
include "koneksi.php";
$user = $_POST['username'];
$password = md5($_POST['password']);
$op = $_GET['op'];

if ($op == "in") {
    $sc = "SELECT * FROM register WHERE username='$user' AND pass='$password'";
    $x = $koneksi->query($sc);
    if (mysqli_num_rows($x) > 0) {
        $sql = mysqli_fetch_assoc($x);
        $_SESSION['user'] = $sql['username'];
        $_SESSION['level'] = $sql['level'];
        if ($sql['level'] == "admin") {
            header("location:homeadmin.php");
        } else if ($sql['level'] == "user") {
            header("location:homeuser.php");
        } else {
            die("Password Salah! <a href=\"javascript:history.back()\">Kembali!</a>");
        }
    }
} elseif ($op == "out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:index.php");
}