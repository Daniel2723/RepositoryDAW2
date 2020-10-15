<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA </TITLE></HEAD>
<BODY>
<?php
    $mayor=array(0,0,0);
    $promedio=array(0,0,0);
    $elementos=array(
        array(rand(0,10),rand(0,10),rand(0,10)),
        array(rand(0,10),rand(0,10),rand(0,10)),
        array(rand(0,10),rand(0,10),rand(0,10))
    );
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo " ".$elementos[$j][$i]." ";
            $promedio[$i]+=$elementos[$j][$i];
            if($elementos[$j][$i]>=$mayor[$i]){
                $mayor[$i]=$elementos[$j][$i];
            }
        }
        echo "<BR>";
    }
    for($i=0;$i<3;$i++){
        echo "El promedio de la fila numero $i es: ".($promedio[$i]/3)." -- Y el mayor numero es: ".$mayor[$i]."<br>";
    }
    
?>
</BODY>
</HTML>