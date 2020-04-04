<!DOCTYPE html>
<html>

<head>
    <title>Pembelian</title>
</head>

<body>
    [<a href="homeuser.php">Lihat Rekap!</a>]
    <br>
    <h5>Belilah</h5>
    <form action="aksiuser.php" method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><select name="kdbarang">
                        <?php
                        include 'koneksi.php';
                        $a = "SELECT * FROM gudang";
                        $b = $koneksi->query($a);
                        while ($c = $b->fetch_array()) : ?>
                        <option value="<?= $c['kdbarang']; ?>"><?= $c['namabarang']; ?></option>
                        <?php endwhile; ?>
                    </select></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr> <br>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>