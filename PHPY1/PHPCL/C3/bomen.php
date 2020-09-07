<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
    </style>
    <body>
        <?php
            $bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");
            foreach($bomen as $boom) {
                echo "<img src='imgbomen/".$boom."'>";
            }
        ?>
    </body>
</html>