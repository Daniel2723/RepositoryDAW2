<!--Daniel Ortega-->
<HTML>
<HEAD><TITLE> EJ2-Direccion Red – Broadcast y Rango</TITLE></HEAD>
<BODY>
    <?php
        $ip="1.1.1.1/16";
        $aux=$ip;
        
        $posAux=stripos($ip, "/");
        $ip=substr($ip, 0, $posAux);
        $mascara=substr($aux, $posAux+1, strlen($aux));
        $aux2=$ip;
    
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
    
        $gordo=$bin1.".".$bin2.".".$bin3.".".$bin4;
        echo $gordo."<br>";
        $gordo=substr($gordo, 0, $mascara);
        $red=str_pad($gordo, 35, "0");
        $red=substr_replace($red, ".", 8,9);
        echo $red."<BR>";
        $red=substr_replace($red, ".", 17,18);
        echo $red."<BR>";
        $red=substr_replace($red, ".", 26,27);
        echo $red;
        
        
    ?>
    
</BODY>
</HTML>