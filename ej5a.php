<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA </TITLE></HEAD>
<BODY>
<?php
    $modulos1=array("Bases Datos","Entornos Desarrollo","Programacion");
    $modulos2=array("Sistemas Informaticos","FOL","Mecanizado");
    $modulos3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue", "Desarrollo Interfaces", "Ingles");
    $modulos=array();
    for($i=0;$i<count($modulos3);$i++){
        if($i<count($modulos1)){
        $modulos[$i]=$modulos1[$i];
        $modulos[$i+3]=$modulos2[$i];
        }
        $modulos[$i+6]=$modulos3[$i];
    }
    echo "a: "."<BR>";
    for($i=0;$i<count($modulos);$i++){
        echo $modulos[$i]."<BR>";
    }
    $modulosMerge=array();
    $modulosMerge=array_merge($modulos1, $modulos2, $modulos3);
    echo "<BR>"."b: "."<BR>";
    for($i=0;$i<count($modulosMerge);$i++){
        echo $modulosMerge[$i]."<BR>";
    }
    echo "<BR>"."c: "."<BR>";
    $modulosPush=array();
    for($i=0;$i<count($modulos3);$i++){
        if($i<count($modulos1))
        array_push($modulosPush, $modulos1[$i], $modulos2[$i]);
        
        array_push($modulosPush, $modulos3[$i]);
    }
    for($i=0;$i<count($modulosPush);$i++){
        echo $modulosPush[$i]."<BR>";
    }
?>
</BODY>
</HTML>