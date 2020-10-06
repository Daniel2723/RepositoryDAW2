<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
    $num="8192";
    $aux=$num;
    $resto="";
    while($num>0){
        if($num%2==0){
            $resto="0".$resto;
        }else{
            $resto="1".$resto;
        }
        $num=$num/2;
        $num=round($num ,0 ,PHP_ROUND_HALF_DOWN);	
    }
    echo "Numero $aux en binario: $resto";
?>
</BODY>
</HTML>