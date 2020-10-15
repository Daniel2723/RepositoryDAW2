<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
    <?php
        $ip="192.168.16.204";
        $aux=$ip;
    
        $pos=stripos($ip, ".");     //Busco la posición donde se encuentra el 1er punto
        $ip1=substr($ip, 0, $pos);  //Corto y guardo hasta ahí la cadena
        $ip=substr($ip, $pos+1, strlen($ip));   //Elimino la parte que corté antes
    
        $pos=stripos($ip, ".");
        $ip2=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip3=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
        
    
        printf ("La direccion Ip $aux en binario es: "."%08b",$ip1);
        printf ("."."%08b",$ip2);   //Escribo las direcciones IP en binario usando
        printf ("."."%08b",$ip3);   //"printf", usando "%b", añadiendo "08" para que
        printf ("."."%08b",$ip);    //rellene con 0s hasta 8 posiciones
        
    ?>
</BODY>
</HTML>