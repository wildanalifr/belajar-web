<?php 
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['tanggal'];
$d = $_POST['alamat'];
$e = $_POST['agama'];
$f = $_POST['sk'];
$g = $_POST['jk'];
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
 				<th>Nama</th>
 				<th>Tempat Lahir</th>
 				<th>Tanggal Lahir</th>
 				<th>Alamat</th>
 				<th>Agama</th>
 				<th>Status Nikah</th>
 				<th>Jenis Kelamin</th>
 			</thead>
 		</tr>
 		<tr>
 			<tbody>
 				<th><?php echo $a ; ?></th>
 				<th><?php echo $b ; ?></th>
 				<th><?php echo $c ; ?></th>
 				<th><?php echo $d ; ?></th>
 				<th><?php echo $e ; ?></th>
 				<th><?php echo $f ; ?></th>
 				<th><?php echo $g ; ?></th>
 			</tbody>
 		</tr>
 	</table>
 </body>
 </html>