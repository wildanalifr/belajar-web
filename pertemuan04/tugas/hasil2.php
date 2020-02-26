<?php 

$jual= $_POST['harga'];
$hargatotal="";
if ($jual>=100000) {
	$diskon = $jual *(10/100);
	$hargatotal = $jual-$diskon;
}else{
	$diskon = $jual *(5/100);
	$hargatotal = $jual-$diskon;
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil 1</title>
</head>
<body>
	<p><?= $hargatotal; ?></p>
</body>
</html>