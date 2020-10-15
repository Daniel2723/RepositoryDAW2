<HTML>
<HEAD><TITLE> EJ4AM MAYOR DE UNA MATRIZ - DANIEL ORTEGA</TITLE></HEAD>
<BODY>
<?php
    $elementos=array(
       array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)),
        array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)),
        array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10))
    );
    echo "Mostrados por filas: "."<br>";
    for($i=0;$i<3;$i++){
        for($j=0;$j<5;$j++){
            echo "  ($i)($j) => ".$elementos[$i][$j]." ";
        }
        echo "<BR>";
    }
    echo "<br>"."Mostrados por columnas: "."<br>";
    for($i=0;$i<5;$i++){
        for($j=0;$j<3;$j++){
            echo "($j)($i) => ".$elementos[$j][$i]." ";
        }
        echo "<BR>";
    }
?>
</BODY>
</HTML>