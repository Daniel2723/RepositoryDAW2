<?php

$dni=$_REQUEST["dni"];
$nombreEmp=$_REQUEST["nombreEmp"];
$apellidoEmp=$_REQUEST["apellidosEmp"];
$fecha=$_REQUEST["fechaNaci"];
$salario=$_REQUEST["salario"];
$codigoDep=$_REQUEST["codigoDep"];

$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname="empleados1n";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO empleado (dni, nombre, apellidos, fecha_nac, salario, cod_dpto) VALUES ('$dni', '$nombreEmp', '$apellidoEmp', '$fecha', $salario, '$codigoDep')";
    $conn->exec($sql);
    echo "New record created successfully: $sql";
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>