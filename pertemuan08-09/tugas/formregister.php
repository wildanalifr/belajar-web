<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="aksiregister.php" method="POST">
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
                <td>Ulangi Password:</td>
                <td><input type="password" name="password_ulang" require></td>
            </tr>
            <tr>
                <td>Nama Lengkap:</td>
                <td><input type="text" name="namalengkap" require></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" require></td>
            </tr>
            <tr>
                <td>Level:</td>
                <td><select name="level">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>

</html>