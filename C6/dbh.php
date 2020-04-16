<?php

$servername = "localhost";
$dbname = "login";
$username = "root";
$password = "";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected succesfully <br>";
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . '<br>';
}

?>