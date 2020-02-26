<?php 

$jumlah_beli=5;
$harga_beli=500000;
$total_beli=$jumlah_beli*$harga_beli;
if ($total_beli>=200000) 
	$bonus="pulsa seratus ribu";
else
	$bonus="makan gratis";
echo ("jumlah beli : ".$jumlah_beli);
echo "br";
echo ("total beli : ".$total_beli);
echo "br";
echo ("bonus : ".$bonus);
echo "br";
 ?>