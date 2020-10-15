<HTML>
<HEAD><TITLE> EJ5B – Tabla multiplicar con TD</TITLE></HEAD>
<BODY>
<?php
    $num="8";

    echo "<table border=\"1\">";
    for($i=0;$i<=10;$i++){
        echo "<tr>";
        echo "<td> " ."$num x $i =". "</td>";
        echo "<td> " .($num*$i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
?>
</BODY>
</HTML>
