<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" require></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" require></td>
            </tr>
            <tr>
                <td>Komentar:</td>
                <td><textarea name="komentar" require></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="SAVE"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>

</html>