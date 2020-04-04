<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$ulangipassword = md5($_POST['password_ulang']);
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$level = $_POST['level'];

if ($password === $ulangipassword) {
    $sql = "INSERT INTO register (username,pass,email,namalengkap,level) VALUES ('" . $username . "','" . $password .
        "','" . $namalengkap . "','" . $email . "','" . $level . "')";
    $a = $koneksi->query($sql);
    if ($a === true) {
        header('location:index.php');
    } else {
        echo "error";
    }
} else {
    die("Password tidak sama");
}