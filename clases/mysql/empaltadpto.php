<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "empleadosnn";
$autonumerico="D00";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    
    $nombre = $_REQUEST['nombreDep'];
    $codigo='select max(cod_dpto) as allCodes from departamento';
    foreach ($conn->query($codigo) as $fila){
        $codDep=$fila['allCodes'];
        if($codDep==""){
            $codDep="D001";
        }
        else{
            $codDep="D".str_pad(strval(intval(substr($codDep, 1))+1),3,"0", STR_PAD_LEFT);
        }
    }
    
    $stmt = $conn->prepare("INSERT INTO departamento (cod_dpto,nombre_dpto) VALUES (:cod_dpto,:nombre_dpto)");
    $stmt->bindParam(':cod_dpto', $codDep);
    $stmt->bindParam(':nombre_dpto', $nombre);
  
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;   
?>
