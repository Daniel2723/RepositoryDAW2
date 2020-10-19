<!-- Daniel Ortega-->
<HTML>
<HEAD> <TITLE> BINGO -- DANIEL ORTEGA </TITLE> </HEAD>

<BODY>
<?php
	for($i=0;$i<7;$i++){
		$num=$i*10;
		$num1[0][$i]=rand($num,$num+9);
		do{
			$num1[1][$i]=rand($num,$num+9);
		}while($num1[0][$i]==$num1[1][$i]);
		do{
			$num1[2][$i]=rand($num,$num+9);
		}while($num1[0][$i]==$num1[2][$i]||$num1[1][$i]==$num1[2][$i]);
		$num1[rand(0,2)][$i]="";
	}
	
	echo "</tr></table>";
    echo "<table border=\"1\">";
    echo "<tr>";
        for($i=0;$i<3;$i++){
            echo "<tr>";
            for($j=0;$j<7;$j++){
            echo "<td> " .$num1[$i][$j]. "</td>";
			}
            echo "</tr>";
    }
    echo "</tr></table>";
?>
</BODY>
</HTML>
