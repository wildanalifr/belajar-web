<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="aksilogin.php?op=in" method="POST">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" require></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" require></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>

    <a href="formregister.php">Daftar</a>
</body>

</html>