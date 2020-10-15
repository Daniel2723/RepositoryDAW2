<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA </TITLE></HEAD>
<BODY>
<?php
    $elementos=array(
        array(0+0, 0+1, 0+2),
        array(1+0, 1+1, 1+2),
        array(2+0, 2+1, 2+2),
        array(3+0, 3+1, 3+2),
        array(4+0, 4+1, 4+2)
    );
    echo "<br>"."Mostrados por columnas: "."<br>";
    for($i=0;$i<3;$i++){
        echo "Columna n $i: ";
        for($j=0;$j<5;$j++){
            echo $elementos[$j][$i]." ";
        }
        echo "<BR>";
    }

    
?>
</BODY>
</HTML>