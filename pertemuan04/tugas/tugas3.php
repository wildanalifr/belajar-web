<?php

$a = rand(1, 10);
$b = rand(1, 10);
$c = $a * $b;

?>

<!DOCTYPE html>
<html>

<head>
	<title>Tugas 3</title>
	</style>
</head>

<body>
	<form action="hasil3.php" method="post">
		<table>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea cols="10" rows="2" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td><input type="radio" name="gender" value="cowok">Cowok
					<input type="radio" name="gender" value="cewek">Cewek</td>
			</tr>
			<tr>
				<td>Hitung :</td>
				<input type="hidden" name="hasil1" value="<?= $a ?>">
				<input type="hidden" name="hasil2" value="<?= $b ?>">
				<td><?= "$a * $b" ?></td>
			</tr>
			<tr>
				<td>Jawab :</td>
				<td><input type="text" name="jawab"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>