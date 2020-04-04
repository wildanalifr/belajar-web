<?php
include 'koneksi.php';
$id_barang = $_POST['kdbarang'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO jualbeli (kdbarang,jenis,jumlah) VALUES ('" . $id_barang . "','jual','" . $jumlah . "')";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location:homeuser.php');
} else {
    echo "error";
}