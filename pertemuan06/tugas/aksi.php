<?php
include 'koneksi.php';
$id_matkul = $_POST['matkul'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];
$sql = "INSERT INTO jadwal (id_matkul,hari,jam,ruang) VALUES ('" . $id_matkul . "','" . $hari . "','" . $jam . "','" . $ruang . "')";
$a = $koneksi->query($sql);
if ($a === true) {
    header('location:view.php');
} else {
    echo "error";
}