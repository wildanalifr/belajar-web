<?php 
define('Phi', '3.14');

$r = $_POST['nilai'];
$hasil = 2 * Phi * $r;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hasil</title>
 	
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<thead>
 				<th>#</th>
 				<th>Jari2</th>
 				<th>Nilai Phi</th>
 				<th>Keliling</th>
 			</thead>
 		</tr>
 		<tr>
 			<tbody>
 				<th><?= "#" ; ?></th>
 				<th><?= $r ; ?></th>
 				<th><?= Phi ; ?></th>
 				<th><?= $hasil ; ?></th>
 			</tbody>
 		</tr>
 	</table>
 </body>
 </html>