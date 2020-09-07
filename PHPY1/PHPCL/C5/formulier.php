<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
    </style>
    <body>
        <?php

        $email = array ("piet@worldonline.nl", "klaas@carpets.nl", "truushendriks@wegweg.nl");
        $password = array ("doetje123", "snoepje777", "arkiearkie201");

        if ($_POST['email'] == $email[0] && $_POST['password'] == $password[0]) {
            echo "Welcome", exit();
        }
        if ($_POST['email'] == $email[1] && $_POST['password'] == $password[1]) {
            echo "Welcome", exit();
        }
        if ($_POST['email'] == $email[2] && $_POST['password'] == $password[2]) {
            echo "Welcome", exit();
        } else { 
            echo "sorry, no access";
        }

        ?>
    </body>
</html>