<HTML>
<HEAD><TITLE> EJ6B – Factorial</TITLE></HEAD>
<BODY>
<?php
    $num="7";
    $aux=1;
    for($i=$num; $i>0; $i-=1){
        $aux=$aux*$i;
    }
    echo $aux;
?>
</BODY>
</HTML>