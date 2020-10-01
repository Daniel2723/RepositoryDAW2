<!--Daniel Ortega-->
<HTML>
<HEAD><TITLE> EJ2-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
    <?php
        $ip="25.1.255.255";
        $aux=$ip;
    
        $pos=stripos($ip, ".");     //Igual que en el anterior ejercicio, corto las
        $ip1=substr($ip, 0, $pos);  //cadenas analizando la pos de los puntos
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip2=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip3=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $bin1=decbin($ip1);     //Paso a binario usando "decbin"
        $bin2=decbin($ip2);
        $bin3=decbin($ip3);
        $bin4=decbin($ip);
        
        $bin1=str_pad($bin1, 8, "0", STR_PAD_LEFT);   //Relleno con 0s hasta un maximo
        $bin2=str_pad($bin2, 8, "0", STR_PAD_LEFT);   //de 8 posiciones, con "str_pad"  
        $bin3=str_pad($bin3, 8, "0", STR_PAD_LEFT);   //y usando "STR_PAD_LEFT"  
        $bin4=str_pad($bin4, 8, "0", STR_PAD_LEFT);
    
        echo "La direccion ip $aux en binario es: ".$bin1.".".$bin2.".".$bin3.".".$bin4;
        //Escribo el resultado final añadiendo los puntos necesarios 
     ?>
</BODY>
</HTML>
