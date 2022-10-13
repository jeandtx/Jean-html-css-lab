<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', '1');
$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$connexion = mysqli_connect($host, $user, $password, $db);

if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Connexion file</h1>
</body>

</html>