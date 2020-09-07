<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
    </style>
    <body>
        <?php
            echo "First Name: ", $_POST['firstName'];
            echo "<br>";
            echo "Last Name: ", $_POST['lastName'];
            echo "<br>";
            echo "Adress: ", $_POST['adress'];
            echo "<br>";
            echo "Zip Code: ", $_POST['postCode'];
            echo "<br>";
            echo "Email: ", $_POST['email'];
            echo "<br>";
            echo "Passwoord: ", $_POST['password'];
            echo "<br>";

            if($_POST['firstName'] == "") {
                echo "<br>You must enter a first name ";
                echo "<a href =\"Dynamische.html\">back to the form</a>";
            }
            if($_POST['lastName'] == "") {
                echo "<br>You must enter a last name ";
                echo "<a href =\"Dynamische.html\">back to the form</a>";
            }
            if($_POST['adress'] == "") {
                echo "<br>you still have to fill in an address ";
                echo "<a href =\"Dynamische.html\">back to the form</a>";
            }
            if($_POST['postCode'] == "") {
                echo "<br>You still have to enter a zip code ";
                echo "<a href =\"Dynamische.html\">back to the form</a>";
            }
            if($_POST['email'] == "") {
                echo "<br>You have to fill in an email ";
                echo "<a href =\"Dynamische.html\">back to the form</a>";
            }
            if($_POST['password'] == "") {
                echo "<br>You still have to enter a password ";
                echo "<a href =\"Dynamische.html\">back to the form</a>";
            }

        ?>
    </body>
</html>