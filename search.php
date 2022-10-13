<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
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
    <div class="container mt-5">
        <h2> PHP Select Dropdown Example </h2>
        <form action="#" method="post">
            <input type="text" value="Search" name="search">
            <select name="Movies">
                <option value="-" selected> - </option>
                <option value="Name"> Name </option>
                <option value="Surname"> Surname </option>
            </select>
            <br> <br> <input type="submit" name="submit" value="Search student">
        </form>

        <br>
        <br>
        <br>

        <?php

        echo "<br><br><br>";

        $search = $_POST['search'];

        if ($selected == "Name") {
            $query = "SELECT * FROM student WHERE name LIKE '%$search%'";
        } elseif ($selected == "Surname") {
            $query = "SELECT * FROM student WHERE surname LIKE '%$search%'";
        } else {
            $query = "SELECT * FROM student";
        }


        $result = mysqli_query($connexion, $query);
        echo "<table border='1'>
        <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Age</th>
        <th>Sexe</th>
        </tr>";

        $td = "<td>";
        $etd = "</td>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo $td . $row['Name'] . $etd;
            echo $td . $row['Surname'] . $etd;
            echo $td . $row['Age'] . $etd;
            echo $td . $row['Sexe'] . $etd;
            echo "</tr>";
        }

        mysqli_close($connexion);
        ?>
    </div>
</body>

</html>