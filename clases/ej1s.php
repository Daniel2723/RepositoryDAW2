<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
    <?php
        $ip="2.180.16.204";
        $aux=$ip;
        $ip=str_pad($ip,strlen($ip)+1,".");
    
        $pos=stripos($ip, ".");
        $ip1=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip2=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip3=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip4=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
        $ip2=str_pad($ip2, 8, "0", STR_PAD_LEFT);
    
        printf ("La direccion Ip $aux en binario es: "."%08b",$ip1);
        printf ("."."%08b",$ip2);
        printf ("."."%08b",$ip3);
        printf ("."."%08b",$ip4);
        
    ?>
</BODY>
</HTML>