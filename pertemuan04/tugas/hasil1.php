<?php 

$hasil= $_POST['tarif'];
$jenis="";
if ($hasil>=150000 && $hasil<250000) {
	$jenis="melati";
}elseif ($hasil>=250000 && $hasil<500000) {
	$jenis="deluxe";
}elseif ($hasil>=500000 && $hasil<1000000) {
	$jenis="superior";
}elseif ($hasil>=1000000 && $hasil<5000000) {
	$jenis="president";
}else{
	$jenis="kelas hotel belum tersedia";
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil 1</title>
</head>
<body>
	<p><?= $jenis; ?></p>
</body>
</html>