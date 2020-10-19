<!-- Daniel Ortega-->
<HTML>
<HEAD> <TITLE> BINGO -- DANIEL ORTEGA </TITLE> </HEAD>

<BODY>
<?php
    $bingo=array(
        array(3, "", 21, 30, "", 52, ""),
        array(7, 13, 25, "", 41, 57, 60),
        array("", 18, 29, 31, 44, 58, "")
    );
    $bingo2=array(
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69)),
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69)),
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69))
    );
    $bingo3=array(
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69)),
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69)),
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69))
    );
    $bingo4=array(
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69)),
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69)),
        array(rand(0,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69))
    );//Creacion de los 4 arrays con los cartoens
    $aux=0;
    for($i=0;$i<7;$i++){//Comprobar que no se repite ningun valor al haber creado los cartones de forma aleatoria
        if(($bingo2[0][$i]==$bingo2[1][$i])||($bingo2[2][$i]==$bingo2[1][$i])){
            $aux=$i*10;
            $bingo2[0][$i]=rand($aux,$aux+9);
        }
        if(($bingo2[0][$i]==$bingo2[2][$i])||($bingo2[2][$i]==$bingo2[1][$i])){
            $aux=$i*10;
            $bingo2[2][$i]=rand($aux,$aux+9);
        }
        if(($bingo3[0][$i]==$bingo3[1][$i])||($bingo3[2][$i]==$bingo3[1][$i])){
            $aux=$i*10;
            $bingo3[0][$i]=rand($aux,$aux+9);
        }
        if(($bingo3[0][$i]==$bingo3[2][$i])||($bingo3[2][$i]==$bingo3[1][$i])){
            $aux=$i*10;
            $bingo3[2][$i]=rand($aux,$aux+9);
        }
        if(($bingo4[0][$i]==$bingo4[1][$i])||($bingo4[2][$i]==$bingo4[1][$i])){
            $aux=$i*10;
            $bingo4[0][$i]=rand($aux,$aux+9);
        }
        if(($bingo4[0][$i]==$bingo4[2][$i])||($bingo4[2][$i]==$bingo4[1][$i])){
            $aux=$i*10;
            $bingo4[2][$i]=rand($aux,$aux+9);
        }
    }
    
    for($i=0;$i<7;$i++){//Ordenacion de los cartones para que se muestren de menor a mayor por columnas
        if($bingo2[0][$i]>$bingo2[1][$i]){
            $aux=$bingo2[1][$i];
            $bingo2[1][$i]=$bingo2[0][$i];
            $bingo2[0][$i]=$aux;
        }
        if($bingo2[1][$i]>$bingo2[2][$i]){
            $aux=$bingo2[2][$i];
            $bingo2[2][$i]=$bingo2[1][$i];
            $bingo2[1][$i]=$aux;
        }
        if($bingo2[0][$i]>$bingo2[1][$i]){
            $aux=$bingo2[1][$i];
            $bingo2[1][$i]=$bingo2[0][$i];
            $bingo2[0][$i]=$aux;
        }
        if($bingo3[0][$i]>$bingo3[1][$i]){
            $aux=$bingo3[1][$i];
            $bingo3[1][$i]=$bingo3[0][$i];
            $bingo3[0][$i]=$aux;
        }
        if($bingo3[1][$i]>$bingo3[2][$i]){
            $aux=$bingo3[2][$i];
            $bingo3[2][$i]=$bingo3[1][$i];
            $bingo3[1][$i]=$aux;
        }
        if($bingo3[0][$i]>$bingo3[1][$i]){
            $aux=$bingo3[1][$i];
            $bingo3[1][$i]=$bingo3[0][$i];
            $bingo3[0][$i]=$aux;
        }
        if($bingo4[0][$i]>$bingo4[1][$i]){
            $aux=$bingo4[1][$i];
            $bingo4[1][$i]=$bingo4[0][$i];
            $bingo4[0][$i]=$aux;
        }
        if($bingo4[1][$i]>$bingo4[2][$i]){
            $aux=$bingo4[2][$i];
            $bingo4[2][$i]=$bingo4[1][$i];
            $bingo4[1][$i]=$aux;
        }
        if($bingo4[0][$i]>$bingo4[1][$i]){
            $aux=$bingo4[1][$i];
            $bingo4[1][$i]=$bingo4[0][$i];
            $bingo4[0][$i]=$aux;
        }
    }
    //Eliminacion de huecos sobrantes, para que el carton disponga de 15 huecos
    $bingo2[0][1]="";
    $bingo2[0][4]="";
    $bingo2[0][6]="";
    $bingo2[1][4]="";
    $bingo2[2][1]="";
    $bingo2[2][7]="";
    
    $bingo3[0][1]="";
    $bingo3[0][0]="";
    $bingo3[0][5]="";
    $bingo3[1][6]="";
    $bingo3[2][6]="";
    $bingo3[2][1]="";
    
    $bingo4[0][2]="";
    $bingo4[0][3]="";
    $bingo4[0][6]="";
    $bingo4[1][1]="";
    $bingo4[2][2]="";
    $bingo4[2][7]="";
    
    echo "<table border=\"1\">";//Mostrar los cartones con tablas
    echo "<tr>";
        for($i=0;$i<3;$i++){
            echo "<tr>";
            echo "<td> " .$bingo[$i][0]. "</td>";
            echo "<td> " .$bingo[$i][1]. "</td>";
            echo "<td> " .$bingo[$i][2]. "</td>";
            echo "<td> " .$bingo[$i][3]. "</td>";
            echo "<td> " .$bingo[$i][4]. "</td>";
            echo "<td> " .$bingo[$i][5]. "</td>";
            echo "<td> " .$bingo[$i][6]. "</td>";
            echo "</tr>";
    }

    echo "</tr></table>";
    echo "<table border=\"1\">";
    echo "<tr>";
        for($i=0;$i<3;$i++){
            echo "<tr>";
            echo "<td> " .$bingo2[$i][0]. "</td>";
            echo "<td> " .$bingo2[$i][1]. "</td>";
            echo "<td> " .$bingo2[$i][2]. "</td>";
            echo "<td> " .$bingo2[$i][3]. "</td>";
            echo "<td> " .$bingo2[$i][4]. "</td>";
            echo "<td> " .$bingo2[$i][5]. "</td>";
            echo "<td> " .$bingo2[$i][6]. "</td>";
            echo "</tr>";
    }

    echo "</tr></table>";
    echo "<table border=\"1\">";
    echo "<tr>";
        for($i=0;$i<3;$i++){
            echo "<tr>";
            echo "<td> " .$bingo3[$i][0]. "</td>";
            echo "<td> " .$bingo3[$i][1]. "</td>";
            echo "<td> " .$bingo3[$i][2]. "</td>";
            echo "<td> " .$bingo3[$i][3]. "</td>";
            echo "<td> " .$bingo3[$i][4]. "</td>";
            echo "<td> " .$bingo3[$i][5]. "</td>";
            echo "<td> " .$bingo3[$i][6]. "</td>";
            echo "</tr>";
    }

    echo "</tr></table>";
    echo "<table border=\"1\">";
    echo "<tr>";
        for($i=0;$i<3;$i++){
            echo "<tr>";
            echo "<td> " .$bingo4[$i][0]. "</td>";
            echo "<td> " .$bingo4[$i][1]. "</td>";
            echo "<td> " .$bingo4[$i][2]. "</td>";
            echo "<td> " .$bingo4[$i][3]. "</td>";
            echo "<td> " .$bingo4[$i][4]. "</td>";
            echo "<td> " .$bingo4[$i][5]. "</td>";
            echo "<td> " .$bingo4[$i][6]. "</td>";
            echo "</tr>";
    }

    echo "</tr></table>";
    
    
    
?>
</BODY>
</HTML>