<?php
function cartones() { //Funcion para la creacion de un carton de bingo
        for($i=0;$i<7;$i++){
            $num=$i*10;
            $num1[0][$i]=rand($num,$num+9); //Se generan numeros aleatorios y se introduce en el primer espacio de un array bidimensional
            do{
                $num1[1][$i]=rand($num,$num+9);
            }while($num1[0][$i]==$num1[1][$i]);//Se hace una comprobacion con el segundo numero para que este no exista ya con un bucle doWhile
            do{
                $num1[2][$i]=rand($num,$num+9);
            }while($num1[0][$i]==$num1[2][$i]||$num1[1][$i]==$num1[2][$i]);
            if($i<6)
            $num1[rand(0,2)][$i]="";//Eliminacion de 6 huecos de manera "aleatoria" para que solo haya 15 numeros en el carton
            }
        return $num1;
}
function imprimirCart($carton) {//Funcion que imprime un carton
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
?>