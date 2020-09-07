<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
    </style>
    <body>
        <?php
            $A = "Ik heb niet gefaald.";
            $B = "die niet werken.";
            $C = "10000";
            $FullSentence = "".$A." Ik heb alleen ".$C." manieren gevonden ".$B."";

            echo nl2br ("$FullSentence\nThomas Edison");
        ?>

        <br><br>

        <?php
            $A = "die geen fout";
            $B = "en";
            $C = "niet.";
            $FullSentence = "Mens".$B." ".$A." mak".$B.", werk".$B." ".$C."";

            echo nl2br ("$FullSentence\nAlbert Plesman (KLM)")

        ?>

        <br><br>

        <?php
            $A = "ry";
            $B = ", but";
            $C = "fail";
            $FullSentence = "T".$A." and ".$C." ".$B." never ".$C." to t".$A.".";

            echo nl2br ("$FullSentence\nTyra Banks");
        ?>

        <br><br>

        <?php
            $A = "\"omgaan";
            $B = "met";
            $C = "teleu";

            $FullSentence = "De cursus ".$A." ".$B." ".$C."rstellingen\" kan vanavond helaas niet doorgaan";
            echo nl2br ("$FullSentence\nHerman Finkers");
        ?>
    </body>
</html>