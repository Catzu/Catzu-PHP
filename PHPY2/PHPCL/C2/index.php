<!doctype HTML>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php
            $a = "Ik heb niet gefaald";
            $b = "die niet werken";
            $c = 10000;

            $fullsentence = "$a. Ik heb alleen $c manieren gevonden $b.";

            echo nl2br ("$fullsentence\n-Thomas Edison");
            echo nl2br ("\n");
            echo nl2br ("$a. Ik heb alleen $c manieren gevonden $b.\n-Thomas Edison");
        ?>

    <br><br>

        <?php
            $a = "die geen fout";
            $b = "en";
            $c = "niet.";

            $fullsentence = "Mens$b $a mak$b, werk$b $c";

            echo nl2br ("$fullsentence\n-Albert Plesman (KLM)");
            echo nl2br ("\n");
            echo nl2br ("Mens$b $a mak$b, werk$b $c\n-Albert Plesman (KLM)");
        ?>

    <br><br>

        <?php
            $a = "ry";
            $b = "but";
            $c = "fail";

            $fullsentence = "T$a and $c, $b never $c to t$a.";

            echo nl2br ("$fullsentence\nTyra Banks");
            echo nl2br ("\n");
            echo nl2br ("T$a and $c, $b never $c to t$a.\nTyra Banks");
        ?>

    <br><br>

        <?php
            $a = "\"omgaan";
            $b = "met";
            $c = "teleu";

            $fullsentence = "De cursus $a $b ".$c."rstellingen\" kan vanavond helaas niet doorgaan.";

            echo nl2br ("$fullsentence\n-Herman Finkers");
            echo nl2br ("\n");
            echo nl2br ("De cursus $a $b ".$c."rstellingen\" kan vanavond helaas niet doorgaan.\n-Herman Finkers");
        ?>
    </body>
</html>