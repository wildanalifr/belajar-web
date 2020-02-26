<?php 

$waktu=getdate();
if ($waktu[hours]<=10) {
	echo "Selamat pagi";.
}elseif ($waktu[hours]<=15) {
	echo "Selamat siang";
}elseif ($waktu[hours]<=18) {
	echo "Selamat sore";
}else{
	echo "Selamat malam";
}

 ?>