<HTML>
<HEAD><TITLE> EJ2AM SUMA MATRICES - DANIEL ORTEGA</TITLE></HEAD>
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
    $filas=array(0,0,0);
    $columnas=array(0,0,0);
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $filas[$i]+=$multiplos[$i][$j];
            $columnas[$i]+=$multiplos[$j][$i];
        }
    }
    echo "Suma por filas: "."<BR>"."<table border=\"1\">";
    for($i=0;$i<3;$i++){
        echo "<td> ";
        echo $filas[$i];
        echo "</td> ";
    }
    echo "</table>";
    echo "Suma por columnas: "."<BR>"."<table border=\"1\">";
    for($i=0;$i<3;$i++){
        echo "<tr>"."<td> ";
        echo $columnas[$i];
        echo "</td>"."</tr>";
    }
   
    echo "</table>";
?>
</BODY>
</HTML>