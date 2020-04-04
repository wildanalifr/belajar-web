<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama Mata Kuliah</td>
        </tr>
        <tr>
            <?php 
        $no=1;
        include "koneksi.php";
        $a= "SELECT * FROM matkul";
        $b = $koneksi->query($a);?>

            <?php 
            while ($c=$b->fetch_array()) : ?>
            <td><?= $no++; ?></td>
            <td><?= $c['nm_matkul']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>