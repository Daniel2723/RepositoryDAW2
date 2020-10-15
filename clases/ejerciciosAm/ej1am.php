<HTML>
<HEAD><TITLE> EJ1AM MATRICES - DANIEL ORTEGA</TITLE></HEAD>
<BODY>
<?php
    $i=2;
    $multiplos=array(
        array($i, $i*2, $i*3),
        array($i*4, $i*5, $i*6),
        array($i*7, $i*8, $i*9)
    );
    echo "<table border=\"1\">";
    for($i=0; $i<3; $i++){
        echo "<tr>";
        for($j=0; $j<3; $j++){
            echo "<td> ";
            echo $multiplos[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</BODY>
</HTML>