<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h3>Selamat Datang di TOKO NAWAK</h3>
    <p>Silahkan pilih barang yang anda inginkan</p>
    <table border="1" cellspacing="1" cellpadding="3">
        <tr>
            <thead>
                <td>ID Barang</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Stock</td>
            </thead>
        </tr>
        <tbody>
            <?php
            $no = 1;
            include 'koneksi.php';
            $a = "SELECT * from gudang";
            $b = $koneksi->query($a);
            while ($c = $b->fetch_array()) : ?>
            <tr>
                <th><?= $no++; ?></th>
                <th><?= $c['namabarang']; ?></th>
                <th><?= $c['harga']; ?></th>
                <th><?= $c['stok']; ?></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <a href="userjual.php">Beli Barang</a>
    <a href="index.php">Logout</a>
</body>

</html>