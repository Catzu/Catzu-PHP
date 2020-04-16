<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<style>
    table, tr, td {
        border: solid 1px black;
        border-collapse: collapse;
        padding:10px;
    }
</style>
</head>
<body>
    <?php

        $servername = "localhost";
        $dbname = "school";
        $username = "root";
        $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected succesfully <br>";
        }
        
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . '<br>';
        }

    $query = "SELECT * FROM cursist";
    $stmt = $conn -> prepare($query) or die();
    $stmt -> execute() or die();

    echo '<table>';

    while ($array = $stmt -> fetch()) {
        echo '<tr>';
        echo "<td>" . $array['cursistnr'] . "</td>";
        echo "<td>" . $array['naam'] . "</td>";
        echo "<td>" . $array['roepnaam'] . "</td>";
        echo "<td>" . $array['straat'] . "</td>";
        echo "<td>" . $array['postcode'] . "</td>";
        echo "<td>" . $array['plaats'] . "</td>";
        echo "<td>" . $array['geslacht'] . "</td>";
        echo "<td>" . $array['geb_datum'] . "</td>";
        echo '</tr>';
    }

    echo '</table>';

    ?>
</body>
</html>