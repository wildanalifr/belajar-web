<!DOCTYPE html>
<html>

<head>
    <title>INSERT DATA</title>
</head>

<body>
    <form action="aksi.php" method="POST">
        <table>
            <tr>
                <td>Hari</td>
                <td><select name="hari">
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                    </select></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="jam" required=""></td>
            </tr>
            <tr>
                <td>Ruang</td>
                <td><input type="text" name="ruang" required=""></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td><select name="matkul">
                        <?php
                        include 'koneksi.php';
                        $a = "SELECT * FROM matkul";
                        $b = $koneksi->query($a);
                        while ($c = $b->fetch_array()) : ?>
                        <option value="<?= $c['id_matkul']; ?>"><?= $c['nm_matkul']; ?></option>
                        <?php endwhile; ?>
                    </select></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
                <td>
                    <input type="reset" name="cancel">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>