<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi PHP</title>
</head>

<body>
    <h1>Demo koneksi database mysql</h1>
    <?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_akademik";
    $koneksi = mysqli_connect($host,$username,$password,$database);
    if($koneksi){
    echo "ok";
    }else{
    echo "server not connected";
    }
    ?>
</body>

</html>