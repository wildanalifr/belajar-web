<?php
include 'koneksi.php';
$id_barang = $_POST['kdbarang'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO jualbeli (kdbarang,jenis,jumlah) VALUES ('" . $id_barang . "','beli','" . $jumlah . "')";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location:homeadmin.php');
} else {
    echo "error";
}