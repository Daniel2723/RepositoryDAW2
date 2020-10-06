<HTML>
<HEAD><TITLE> EJ2B – Conversor Decimal a base n </TITLE></HEAD>
<BODY>
<?php
    $num="48";
    $base="2";
    $aux=$num;
    
    $resto="";
    while($num!=0){
        if($num<$base){ 
            $resto=$num."".$resto;
            $num=0;
        }else{
            $resto=$num%$base."".$resto;
            $num=$num/$base;
            $num=round($num ,0 ,PHP_ROUND_HALF_DOWN);
        }
    }
    
    echo "El numero $aux en base $base es igual a: $resto";
    
?>
</BODY>
</HTML>
