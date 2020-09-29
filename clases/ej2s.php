<HTML>
<HEAD><TITLE> EJ2-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
    <?php
        $ip="25.1.255.255";
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
    
        $int1=intval($ip1);
        $int2=intval($ip2);
        $int3=intval($ip3);
        $int4=intval($ip4);
    
        $bin1=decbin($ip1);
        $bin2=decbin($ip2);
        $bin3=decbin($ip3);
        $bin4=decbin($ip4);
        
        $bin1=str_pad($bin1, 8, "0", STR_PAD_LEFT);
        $bin2=str_pad($bin2, 8, "0", STR_PAD_LEFT);
        $bin3=str_pad($bin3, 8, "0", STR_PAD_LEFT);
        $bin4=str_pad($bin4, 8, "0", STR_PAD_LEFT);
    
        echo "La direccion ip $aux en binario es: ".$bin1.".".$bin2.".".$bin3.".".$bin4;
        
     ?>
</BODY>
</HTML>