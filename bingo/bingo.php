<!-- Daniel Ortega-->
<HTML>
<HEAD> <TITLE> BINGO -- DANIEL ORTEGA </TITLE> </HEAD>

<BODY>
<?php
    function cartones() {
        for($i=0;$i<7;$i++){
            $num=$i*10;
            $num1[0][$i]=rand($num,$num+9);
            do{
                $num1[1][$i]=rand($num,$num+9);
            }while($num1[0][$i]==$num1[1][$i]);
            do{
                $num1[2][$i]=rand($num,$num+9);
            }while($num1[0][$i]==$num1[2][$i]||$num1[1][$i]==$num1[2][$i]);
            if($i<6)
            $num1[rand(0,2)][$i]="";
            }
        return $num1;
    }
    function imprimirCart($carton) {
        echo "</tr></table>";
    echo "<table border=\"1\">";
    echo "<tr>";
        for($i=0;$i<3;$i++){
            echo "<tr>";
            for($j=0;$j<7;$j++){
            echo "<td> " .$carton[$i][$j]. "</td>";
			}
            echo "</tr>";
    }
    echo "</tr></table>";
    }
    $num0=cartones();
	$num1=cartones();
    $num2=cartones();
	$num3=cartones();
	imprimirCart($num0);
	imprimirCart($num1);
    imprimirCart($num2);
    imprimirCart($num3);
    
    $bombo=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24  ,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69);
    $bombo2=array();
    $ganar=false;
    $ganador=array(0,0,0,0);
    while(!$ganar){
        $aux=rand(1,69);
        if($bombo[$aux]!=0){
            $i=1;
            $bombo2[$i]=$aux;
            $bombo[$aux]=0;
            for($i=0;$i<3;$i++){
                $comp=intval($aux/10);
                if($num0[$i][$comp]==$aux){
                    $ganador[0]++;
                }
                if($num1[$i][$comp]==$aux){
                    $ganador[1]++;
                }
                if($num2[$i][$comp]==$aux){
                    $ganador[2]++;
                }
                if($num3[$i][$comp]==$aux){
                    $ganador[3]++;
                }
                if(in_array(15, $ganador)){
                    $ganar=true;
                }
            }
        }
    }
    for($i=0;$i<4;$i++){
        if($ganador[$i]==15){
            echo "El ganador es el carton numero: ".($i+1)."<BR>";   
        }
    }
?>
</BODY>
</HTML>
