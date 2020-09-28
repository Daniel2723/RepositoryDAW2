<html>
    <head>CALCULADORA</head>
    <body>
        <br><br>
        <?php
            $suma1=3;
            $suma2=-7;
            $resta1=3.2;
            $resta2=4;
            $producto1=3;
            $producto2=4;
            $division1=8;
            $division2=3;
            $resto1=5;
            $resto2=2;
            echo "La suma de ".$suma1." mas ".$suma2." es igual a: ".($suma1+$suma2)."<BR>";
            echo 'La resta de '.$resta1.' menos '.$resta2.' es igual a: '.($resta1-$resta2).'<br>';
            print "El producto de ".$producto1." por ".$producto2." es igual a: ".($producto1*$producto2)."<BR>";
            print "El resto de ".$resto1." entre ".$resto2." es igual a: ".($resto1%$resto2)."<BR>";
            print "La division de ".$division1." entre ".$division2." es igual a: ".($division1/$division2)."<BR>";
            echo "$resta1 es del tipo ".gettype($resta1)."<br/>";
            echo "$producto2 es del tipo ",gettype($producto2),"<br/>";
            echo "$suma2 es del tipo ".gettype($suma2)."<br/>";
        ?>
    </body>
</html>    