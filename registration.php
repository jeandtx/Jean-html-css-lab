<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

<body>
    <h1>
        Register
    </h1>
    <form action="registration.php" method="post" style="display: flex; flex-direction: column; width: 30%">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="age" placeholder="Age">
        <input type="text" name="sexe" placeholder="Sexe">
        <input type="text" name="password" placeholder="Password">

        <input type="submit" name="submit" value="Register">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        $sexe = $_POST['sexe'];
        $password = md5($_POST['password']);

        $query = "INSERT INTO student (name, surname, age, sexe, password) VALUES
        ('$name', '$surname', '$age', '$sexe', '$password')";
        $result = mysqli_query($connexion, $query);
        if ($result) {
            echo "You have been registered";
        } else {
            echo "Error you have not been registered";
        }
    }
    ?>
</body>

</html>