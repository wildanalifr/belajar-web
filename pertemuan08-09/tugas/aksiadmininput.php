<?php
include 'koneksi.php';
$namabarang = $_POST['namabarang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO gudang (namabarang,harga,stok) VALUES ('" . $namabarang . "','" . $harga .
    "','" . $stok . "')";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location:homeadmin.php');
} else {
    echo "error";
}