<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "empleadosnn";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    
    if (!isset($_POST) || empty($_POST)) { 
        
        $stmt = $conn->prepare("SELECT nombre_dpto FROM departamento");
        $stmt->execute();
        
        $departamentos = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        echo '<form action="empaltaemp.php" method="request">';
?>
        
        <div>
        <label for="dni">DNI</label>
        <input name="dni" type="text"/><br>
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text"/><br>
        <label for="apellidos">Apellidos</label>
        <input name="apellidos" type="text"/><br>
        <label for="fechaNac">Fecha de Nacimiento</label>
        <input name="fechaNac" type="date"/><br>
        <label for="salario">Salario</label>
        <input name="salario" type="text"/><br>
        <label for="departamento">Departamentos:</label>
        <select name="departamento">
        <?php 
            foreach($stmt->fetchAll() as $departamento) {
                echo "<option>$departamento[nombre_dpto]</option>";
            }
        ?>
        </select>
        </div>
        </BR>
<?php
        echo '<div><input type="submit" value="Actualizar Datos"></div>
        </form>';
        
        
        
    } else { 
        echo "owo";
    $nombre=$_REQUEST['nombre'];
        $dni=$_REQUEST["dni"];
        $apellidos=$_REQUEST["apellidos"];
        $fechaNac=$_REQUEST["fechaNac"];
        null;
	
    }
    
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null; 

?>

<!--CREATE TABLE empleado
(dni 		VARCHAR(9),
 nombre 	VARCHAR(40),
 apellidos 	VARCHAR(40),
 fecha_nac	DATE,
 salario	DOUBLE); 

CREATE TABLE emple_depart
(dni 		VARCHAR(9),
 cod_dpto   VARCHAR(4),
 fecha_ini	DATETIME,
 fecha_fin	DATETIME);
-->
