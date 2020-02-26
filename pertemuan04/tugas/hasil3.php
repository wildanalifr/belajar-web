<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['gender'];
$email = $_POST['email'];
$jawaban = $_POST['jawab'];
$hasil1 = $_POST['hasil1'];
$hasil2 = $_POST['hasil2'];
$a=$hasil1*$hasil2;
?>

<?php if ($jawaban == $a): ?> 	

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
 				<th>Alamat</th>
 				<th>Email</th>
 				<th>Jenis Kelamin</th>
 				<th>Jawaban</th>
 			</thead>
 		</tr>
 		<tr>
 			<tbody>
 				<th><?= $nama; ?></th>
 				<th><?= $alamat ; ?></th>
 				<th><?= $email ; ?></th>
 				<th><?= $jeniskelamin ; ?></th>
 				<th>Benar</th>
 			</tbody>
 		</tr>
 	</table>
 </body>
 </html>
 <?php else: ?>
	<script>
		alert('Jawaban anda salah');
		history.back();
	</script>";
<?php endif; ?>

 