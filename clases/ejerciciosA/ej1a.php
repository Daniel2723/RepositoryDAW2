<HTML>
<HEAD><TITLE> EJ1A NUMEROS IMPARES - DANIEL ORTEGA</TITLE></HEAD>
<BODY>
<?php
    $array=array();
    $acum=0;
    $impar="-1";
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<td> " ."Indice". "</td>";
    echo "<td> " ."Valor". "</td>";
    echo "<td> " ."Suma" . "</td>";
    echo "</tr>";
        for($i=0;$i<=20;$i++){
            $array[$i]=$impar+2;
            $impar+=2;
            $acum+=$impar;
            echo "<tr>";
            echo "<td>" .$i."</td>";
            echo "<td>" .$array[$i]."</td>";
            echo "<td>" .$acum. "</td>";
            
        }
    echo "</tr></table>";
            
?>
</BODY>
</HTML>


