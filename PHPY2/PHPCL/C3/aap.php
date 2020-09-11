<!DOCTYPE html>
<html lang="en">
<title></title>
<style>
    body {text-align:center;}
    .rood {border:red solid 5px;}
    .groen {border:green solid 5px;}
</style>
<body>
    <?php
        for($i = 1; $i <=9; $i++) {
            if($i % 2 == 0) {
                $class = "class='rood'";
            } else {
                $class = "class='groen'";
            }
            echo "<img ".$class. "src='imgaap/aap".$i.".jpg'>";
        }
    ?>
</body>
</html>
