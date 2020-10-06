<HTML>
<HEAD><TITLE> EJ3B – Conversor Decimal a base 16</TITLE></HEAD>
<BODY>
<?php
    $num="480";
    $base="16";
    $aux=$num;
    $letras="0123456789ABCDEF";
    $resto="oye"; 
    
    while($num!=0){
        $div=$num%16;
        $cortao=substr($num,$div, 1);
        $resto=$cortao.$resto;
        $num=$num/16;
        $num=round($num ,0 ,PHP_ROUND_HALF_DOWN);
    }
    echo $resto;
    ?>
</BODY>
</HTML>