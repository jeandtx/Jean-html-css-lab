<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <calculation>
        <h1>Exo 1</h1>
        <form action="exo.php" method="post">
            <input type="text" name="miles" placeholder="Enter miles">
            <input type="submit" value="Convert">
        </form>
        <?php
        if (isset($_POST['miles'])) {
            $miles = $_POST['miles'];
            $km = $miles * 1.6;
            echo "<h1>$miles miles is equal to $km kilometers</h1>";
        }
        ?>
    </calculation>
    <temperature>
        <h1>Exo 2</h1>
        <form action="exo.php" method="post">
            <label for="temp">Temperature</label>
            <input type="number" name="temp" id="temp">
            <select name="grade" id="grade">
                <option value="C">C</option>
                <option value="F">F</option>
            </select>
            <input type="submit" value="Convert">
        </form>
        <?php
        if (isset($_POST['temp']) && isset($_POST['grade'])) {
            $temp = $_POST['temp'];
            $grade = $_POST['grade'];
            if ($grade == "C") {
                $result = ($temp * 9 / 5) + 32;
                echo "<p>$temp °C = $result °F</p>";
            } else {
                $result = ($temp - 32) * 5 / 9;
                echo "<p>$temp °F = $result °C</p>";
            }
        }
        ?>
    </temperature>
</body>
<style>
    body {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: left;
    }
</style>

</html>