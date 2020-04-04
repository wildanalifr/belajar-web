<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>
    <a href="form.php">tambah</a>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Komentar</td>
        </tr>
        <tr>
            <?php
            $no = 1;
            include "koneksi.php";
            $a = "SELECT * FROM bukutamu";
            $b = $koneksi->query($a); ?>

            <?php
            while ($c = $b->fetch_array()) : ?>
            <td><?= $no++; ?></td>
            <td><?= $c['nama']; ?></td>
            <td><?= $c['email']; ?></td>
            <td><?= $c['komentar']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>