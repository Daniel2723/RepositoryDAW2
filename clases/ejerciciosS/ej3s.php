<!--Daniel Ortega-->
<HTML>
<HEAD><TITLE> EJ2-Direccion Red – Broadcast y Rango</TITLE></HEAD>
<BODY>
    <?php
        $ip="192.168.16.100/16";
        $aux=$ip;           
        
        $posAux=stripos($ip, "/");      //Busco el punto donde empieza la máscara
        $ip=substr($ip, 0, $posAux);    //Corto hasta ese punto con "substr"
        $mascara=substr($aux, $posAux+1, strlen($aux)); //Guardo también el valor de la máscara
        $aux2=$ip;
        
        $pos=stripos($ip, ".");     //Ahora busco la posición donde está el 1er punto
        $ip1=substr($ip, 0, $pos);    //Corto hasta ese punto
        $ip=substr($ip, $pos+1, strlen($ip));   //Reescribo la cadena omitiendo lo que he guardado
    
        $pos=stripos($ip, ".");     //Repito 2 veces más el proceso anterior
        $ip2=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
    
        $pos=stripos($ip, ".");
        $ip3=substr($ip, 0, $pos);
        $ip=substr($ip, $pos+1, strlen($ip));
        
        $ip4=$ip;    //No hace falta hacerlo una cuarta vez al haber quitado la máscara
    
        $bin1=decbin($ip1); //Paso a binario
        $bin2=decbin($ip2);
        $bin3=decbin($ip3);
        $bin4=decbin($ip4);
        
        $bin1=str_pad($bin1, 8, "0", STR_PAD_LEFT); //Relleno con 0s a la izquierda
        $bin2=str_pad($bin2, 8, "0", STR_PAD_LEFT);
        $bin3=str_pad($bin3, 8, "0", STR_PAD_LEFT);
        $bin4=str_pad($bin4, 8, "0", STR_PAD_LEFT);
    
        $gordo=$bin1."".$bin2."".$bin3."".$bin4;  //Escribo la IP en binario sin puntos
        $red=substr($gordo, 0, $mascara);   //Corto hasta el valor de la máscara
        $red2=str_pad($red, 32, "0");   //La D. red se rellena con 0s
        $broad=str_pad($red, 32, "1");  //La D. broadcast se rrellena con 1s
        
        $red2= substr_replace($red2, ".", 8, 0);  //Devuelvo los puntos a las direcciones 
        $red2= substr_replace($red2, ".", 17, 0);
        $red2= substr_replace($red2, ".", 26, 0);
        $broad= substr_replace($broad, ".", 8, 0);
        $broad= substr_replace($broad, ".", 17, 0);
        $broad= substr_replace($broad, ".", 26, 0);
        
        $rang1=substr($red2, 0, 34); //Recorto el ultimo digito de las direcciones
        $rang2=substr($broad, 0, 34);  //para hacer el rango 
    
        
    
        echo "IP: ".$aux."<BR>";
        echo "Mascara: ".$mascara."<br>";
        echo "Direccion Red: ".$red2."<br>";
        echo "Direccion Broadcast: ".$broad."<br>";
        echo "Rango: ".$rang1."1 a ".$rang2."0"."<br>";
        
    
    ?>
    
</BODY>
</HTML>