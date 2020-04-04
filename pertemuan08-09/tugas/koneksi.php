<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi PHP</title>
</head>

<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "prak-web";
    $koneksi = mysqli_connect($host, $username, $password, $database);
    ?>
</body>

</html>