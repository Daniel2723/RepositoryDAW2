<!-- Daniel Ortega-->
<HTML>
<HEAD> <TITLE> BINGO -- DANIEL ORTEGA </TITLE> </HEAD>

<BODY>
<?php
    include 'funcionesBingo.php';
    $num0=cartones();
	$num1=cartones();
    $num2=cartones();
	$num3=cartones();
	imprimirCart($num0);
	imprimirCart($num1);
    imprimirCart($num2);
    imprimirCart($num3);
    
    $bombo=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24  ,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69);
    $bombo2=array();//Creo dos arrays, uno que almacena todos los numeros posibles y otro que almacenará el orden de los numeros segun vayan saliendo
    $ganar=false; //Boolean que comprobará si ya hay un ganador y cerrará el bucle cuando eso suceda
    $ganador=array(0,0,0,0);//Contador para el ganador, cuando uno de estos numeros alcance 5 se cerrará el bucle while
    while(!$ganar){
        $aux=rand(1,69);
        if($bombo[$aux]!=0){//Comprobacion de que no se repite ningun numero
            echo '<div class="bombo"><img src=/DWES_Reto1_Bingo_ImagesBolas/'.($aux+1).'.PNG></div>';
            $i=1;
            $bombo2[$i]=$aux;//Almacenamos todos los valores en orden.
            $bombo[$aux]=0;//Eliminando el valor aleatorio del array con todos los numeros posibles garantizamos que ningun valor se repita
            for($i=0;$i<3;$i++){
                $comp=intval($aux/10);//para hacer el programa mas rapido, en los arrays bidimensionales solo busco en la decena en la que se pueda encontrar el numero aleatorio que se ha generado
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
            $i++;
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