<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php
            $bomen = array("boom1.jpg","boom2.jpg","boom3.jpg","boom4.jpg","boom5.jpg","boom6.jpg","boom7.jpg","boom8.jpg","boom9.jpg","boom10.jpg");
            foreach($bomen as $boom) {
                echo "<img src='imgbomen/".$boom."'>";
            }
        ?>
    </body>
</html>