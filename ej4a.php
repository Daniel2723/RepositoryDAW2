<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA </TITLE></HEAD>
<BODY>
<?php
    $binario=array();
    $octal=array();
    $reves=array();
    $aux;
    $cont=20;
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<td> " ."Indice". "</td>";
    echo "<td> " ."Binario". "</td>";
    echo "<td> " ."Octal" . "</td>";
    echo "</tr>";
        for($i=0;$i<=20;$i++){
            $binario[$i]=decbin($i);
            $octal[$i]=decoct($i);
            echo "<tr>";
            echo "<td> " .$i. "</td>";
            echo "<td> " .$binario[$i]. "</td>";
            echo "<td> " .$octal[$i]. "</td>";
            echo "</tr>";
        }
    echo "</tr></table>";
    echo "Los numeros en binario en orden inverso: "."<BR>";
        for($i=0;$i<=20;$i++){
            $reves[$i]=$binario[$cont];
            $cont-=1;
        }
        for($i=0;$i<count($reves); $i++){
            echo $reves[$i]."<BR>";
        }
    
?>
</BODY>
</HTML>