<?php 
$a = $_POST['nilai1'];
$b = $_POST['nilai2'];
$c = $a % $b;
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
 				<th>Nilai Pertama</th>
 				<th>Nilai Kedua</th>
 				<th>Hasil Bagi</th>
 			</thead>
 		</tr>
 		<tr>
 			<tbody>
 				<th><?= "#" ; ?></th>
 				<th><?= $a ; ?></th>
 				<th><?= $b ; ?></th>
 				<th><?= $c ; ?></th>
 			</tbody>
 		</tr>
 	</table>
 </body>
 </html>