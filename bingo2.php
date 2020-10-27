<!-- Daniel Ortega-->
<HTML>
<HEAD> <TITLE> BINGO -- DANIEL ORTEGA </TITLE> </HEAD>

<BODY>
<?php
    function imprimirCart($carton) {//Funcion que imprime un carton
    echo "</tr></table>";
    echo "<table border=\"1\">";
    echo "<tr>";
    for($j=0;$j<15;$j++){
         echo "<td> " .$carton[$j]. "</td>";
	}
    echo "</tr>";
    echo "</tr></table>";
}
    $cartones=array();
    for($i=0;$i<15;$i++){
        do{
            $num=rand(1,60);
        }while(in_array($num, $cartones));
        $cartones[$i]=$num;
    }
    imprimirCart($cartones);
?>
</BODY>
</HTML>