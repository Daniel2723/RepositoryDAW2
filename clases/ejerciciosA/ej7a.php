<HTML>
<HEAD><TITLE> EJ2A NUMEROS IMPARES Y MEDIA </TITLE></HEAD>
<BODY>
<?php
    echo "a:"."<BR>";
    $alumnos=array("Javi"=>"12", "Sara"=>"23", "Laura"=>"18", "Manuel"=>"44", "Astolfo"=>"20");
    foreach ($alumnos as $x => $x_value){
        echo "Nombre: $x -- Edad: $x_value"."<BR>";
    }
    echo "b:"."<BR>";
        echo "<BR>"."Edad de Sara: ".$alumnos["Sara"];
?>
</BODY>
</HTML>