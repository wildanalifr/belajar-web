<!DOCTYPE html>
<html>

<head>
    <title>Rekap Data</title>
</head>

<body>
    [<a href="homeadmin.php">Lihat Rekap!</a>]
    <br>
    <h5>INPUT DATA TOKO NAWAK</h5>
    <form action="aksiadmininput.php" method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="namabarang"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Stock Barang</td>
                <td><input type="text" name="stok"></td>
            </tr> <br>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>