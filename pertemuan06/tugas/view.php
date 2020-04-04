<!DOCTYPE html>
<html>

<head>
    <title>Hasil Jadwal</title>
</head>

<body>
    [<a href="form.php">tambah</a>]
    <table border="1" cellspacing="1" cellpadding="3">
        <tr>
            <thead>
                <td>No.</td>
                <td>Nama Mata Kuliah</td>
                <td>Hari</td>
                <td>Jam</td>
                <td>Ruangan</td>
            </thead>
        </tr>
        <tbody>
            <?php
            $no = 1;
            include 'koneksi.php';
            $a = "SELECT * from jadwal,matkul where matkul.id_matkul = jadwal.id_matkul";
            $b = $koneksi->query($a);
            while ($c = $b->fetch_array()) : ?>
            <tr>
                <th><?= $no++; ?></th>
                <th><?= $c['nm_matkul']; ?></th>
                <th><?= $c['hari']; ?></th>
                <th><?= $c['jam']; ?></th>
                <th><?= $c['ruang']; ?></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>