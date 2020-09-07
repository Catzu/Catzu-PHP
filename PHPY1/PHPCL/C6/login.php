<?php include_once 'db.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
    </style>
    <body>
        <?php

            $servername = "localhost";
            $dbname = "login";
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

            $query = "SELECT * FROM users";
            $stmt = $conn -> prepare($query) or die();
            $stmt -> execute() or die();

            while ($array = $stmt -> fetch()) {
                echo "" . $array['email'] . "<br>";
                echo "" . $array['wachtwoord'] . "<br>";
            }

            $email = array ();
            array_push($email, $email1, $email2, $email3);
            $password = array ();
            array_push($password, $wachtwoord1, $wachtwoord2, $wachtwoord3);

            if ($_POST['email'] == $email[0] && $_POST['password'] == $password[0]) {
                echo "<br>Welcome", exit();
            }
            if ($_POST['email'] == $email[1] && $_POST['password'] == $password[1]) {
                echo "<br>Welcome", exit();
            }
            if ($_POST['email'] == $email[2] && $_POST['password'] == $password[2]) {
                echo "<br>Welcome", exit();
            } else { 
                echo "<script>alert('Sorry no entry'); window.location.href='login.html'; </script>";
            }

        ?>
    </body>
</html>