<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
    $banco=1234;
    $entidad=5678;
    $cuenta2="1234567890";
    $cuenta=intval($cuenta2, 10);
    
    $unoE=substr($entidad, 0, 1);
    $dosE=substr($entidad, 1, 1);
    $tresE=substr($entidad, 2, 1);
    $cuatroE=substr($entidad, 3, 1);
    
    $unoO=substr($banco, 0, 1);
    $dosO=substr($banco, 1, 1);
    $tresO=substr($banco, 2, 1);
    $cuatroO=substr($banco, 3, 1);
    
    $suma=($unoE*9)+($dosE*7)+($tresE*3)+($cuatroE*6)+($unoO*4)+($dosO*8)+($tresO*5)+($cuatroO*10);
    $resto=$suma%11;
    
    $unoC=substr($cuenta, 0, 1);
    $dosC=substr($cuenta, 1, 1);
    $tresC=substr($cuenta, 2, 1);
    $cuatroC=substr($cuenta, 3, 1);
    $cincoC=substr($cuenta, 4, 1);
    $seisC=substr($cuenta, 5, 1);
    $sieteC=substr($cuenta, 6, 1);
    $ochoC=substr($cuenta, 7, 1);
    $nueveC=substr($cuenta, 8, 1);
    $diezC=substr($cuenta, 9, 1);
    
    $sumaC=($unoC*1)+($dosC*2)+($tresC*4)+($cuatroC*8)+($cincoC*5)+($seisC*10)+($sieteC*9)+($ochoC*7)+($nueveC*3)+($diezC*6);
    $restoC=$sumaC%11;
    
    echo "su digito de control es: $resto".""."$restoC";
    
?>
</BODY>
</HTML>