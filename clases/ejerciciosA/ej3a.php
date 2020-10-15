<HTML>
<HEAD><TITLE> EJ3A BINARIO Y OCTAL - DANIEL ORTEGA</TITLE></HEAD>
<BODY>
<?php
    $binario=array();
    $octal=array();
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
    
?>
</BODY>
</HTML>