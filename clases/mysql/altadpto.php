<?php

$codigoDep=$_REQUEST["codigoDep"];
$nombreDep=$_REQUEST["nombreDep"];

$servername = "127.0.0.1";
$username = "root";
$password = "rootroot";
$dbname="empleados1n";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO departamento (cod_dpto, nombre_dpto) VALUES ('$codigoDep', '$nombreDep')";
    $conn->exec($sql);
    echo "New record created successfully: $sql";

}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;

?>