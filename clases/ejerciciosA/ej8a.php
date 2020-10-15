<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA </TITLE></HEAD>
<BODY>
<?php
    $alumnos=array("Javi"=>"2", "Sara"=>"6", "Laura"=>"10", "Manuel"=>"6", "Astolfo"=>"3");
    $max=0;
    $maxName;
    $min=10;
    $minName;
    $acum=0;
    echo "a:"."<BR>";
    foreach($alumnos as $x => $x_value){
        if($x_value>$max){
            $max=$x_value;
            $maxName=$x;
        }
        if($x_value<$min){
            $min=$x_value;
            $minName=$x;
        }
        $acum+=$x_value;
    }
    echo "El alumno con mayor nota es: $maxName, que tiene un: $max"."<BR>"."b:"."<BR>";
    echo "El alumno con menor nota es: $minName, que tiene un: $min"."<BR>";
    echo "c:"."<br>";
    echo "La nota media es: ".($acum/5);
?>
</BODY>
</HTML>