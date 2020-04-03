<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <style>
        img {width: 100px;  height: 100px;}
        table, tr, td { border: solid black 1px;}
        td {padding: 10px;}
    </style>
    <body>
        <table>
            <?php
                $zwemclubs = [
                    "de sparkelkuikens" =>25,
                    "de waterbuffels" => 32,
                    "plonsmderin" => 11,
                    "bommetje" => 23
                ];
                foreach ($zwemclubs as $clubnaam => $zwemmers) {
                    echo '<tr>';
                    echo "<td>$clubnaam</td>";
                    echo "<td>$zwemmers</td>";
                    echo '<td>';
                $plaatjes = floor($zwemmers / 5); 

                    for ($i =0; $i < $plaatjes; $i++) {
                        echo '<img src="imgswimmer/swimmer.png">';
                    }
                    echo '</td>';
                    echo '</tr>';
                }
            ?>
        <table>
    </body>
</html>