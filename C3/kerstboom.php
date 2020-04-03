<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
        body { text-align:center;}
    </style>
    <body>
        <?php
            for($i = 0; $i <=9; $i++) {
                for($j = 0; $j < $i; $j++) {
                    echo" * ";
                }
                echo "* <br>";
            }
        ?>
    </body>
</html>