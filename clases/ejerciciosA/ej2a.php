<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA - DANIEL ORTEGA</TITLE></HEAD>
<BODY>
<?php
    $array=array();
    $acum=0;
    $acumI=0;
    $acumP=0;
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
            if($i%2==0){
                $acumP+=$impar;
            }else{
                $acumI+=$impar;
            }
        }
    echo "</tr></table>";
    echo "La media de los valores en las posicionas pares es: ".($acumP/20)."<BR>";
    echo "La media de los valores en las posicionas impares es: ".($acumI/20)."<BR>";
?>
</BODY>
</HTML>